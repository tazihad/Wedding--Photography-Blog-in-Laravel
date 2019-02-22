var walk = require('dom-walk');
var each = require('each');
var attrs = require('attributes');
var domify = require('domify');
var TextBinding = require('./text');
var AttrBinding = require('./attribute');
var ChildBinding = require('./child');
var Directive = require('./directive');

module.exports = function(options) {
  var view = options.view;
  var el = domify(options.template);
  var fragment = document.createDocumentFragment();
  fragment.appendChild(el);

  var activeBindings = [];

  // Walk down the newly created view element
  // and bind everything to the model
  walk(el, function(node, next){
    if(node.nodeType === 3) {
      activeBindings.push(new TextBinding(view, node));
    }
    else if(node.nodeType === 1) {
      var View = options.components[node.nodeName.toLowerCase()];
      if(View) {
        activeBindings.push(new ChildBinding(view, node, View));
        return next();
      }
      each(attrs(node), function(attr){
        var binding = options.directives[attr];
        if(binding) {
          activeBindings.push(new Directive(view, node, attr, binding));
        }
        else {
          activeBindings.push(new AttrBinding(view, node, attr));
        }
      });
    }
    next();
  });

  view.once('destroying', function(){
    while (activeBindings.length) {
      activeBindings.shift().unbind();
    }
  });

  view.activeBindings = activeBindings;

  return fragment.firstChild;
};
