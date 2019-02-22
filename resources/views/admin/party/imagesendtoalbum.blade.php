@extends('admin.master')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">Dashboard</div> --}}

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h2>Add Image To Party  Album</h2>
                            <hr>
                        <form action="{{ route('partygalleryoption') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Upload Image To Album</label>
                                <select name="party_album_id" class="form-control">
                                  <option disabled selected> Select an Album </option>

                                  @foreach($parties as $party)
                                  <option value="{{ $party->id }}"> {{ $party->party_name }}  </option>
                                   @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                 <label for="">Upload an image to albumn</label>
                                 <input type="file" name="party_album_thumbnail" placeholder="Your Image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Upload Image To Album">
                                </div>
                              </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

