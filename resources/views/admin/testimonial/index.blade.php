@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')







    <div class="card mb-3">
        <div class="card-header border-bottom">
          <div class="row flex-between-end">
            <div class="col-auto align-self-center">
              <h5 class="mb-0" data-anchor="data-anchor">Testimonial</h5>
              <p class="mb-0 pt-1 mt-2 mb-0"> <code>Dashboard > Testimonial</code> </p>
            </div>
            <div class="col-auto ms-auto">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
                    {{-- <button
                  class="btn btn-sm active" data-bs-toggle="pill"
                  data-bs-target="#dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8" type="button" role="tab"
                  aria-controls="dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8" aria-selected="true"
                  id="tab-dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8">Add Testimonial</button> --}}
                  <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary mr-1" style="color: white">Add Testimonial</a>
                </div>
            </div>
          </div>
        </div>




        <div class="card-body pt-0">
          <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
              aria-labelledby="tab-dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8"
              id="dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8">
              <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden">
                  <thead>
                    <tr>
                      <th scope="col">Client Logo</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Customer Designation</th>
                      <th scope="col">Customer Company</th>
                      <th scope="col">Date</th>
                      <th style="text-align: center;">Edit</th>
                      <th style="text-align: center;">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($testimonials as $tsti)
                        <tr style="vertical-align: middle;">
                            <td>
                                <img src="/testiimages/{{ $tsti->custimg }}" class="img-responsive"
                                    style="max-height:80px; max-width:50px" alt=""
                                    srcset="">
                            </td>
                            <td>{{ $tsti->custname }}</td>
                            <td>{{ $tsti->custdesignation }}</td>
                            <td>{{ $tsti->custcompany }}</td>
                            <td>{{ $tsti->date }}</td>
                            <td style="text-align: center;"><a
                                    href=" {{ route('admin.testimonial.edit', $tsti->id) }}"
                                    class="btn btn-flat-primary border">Edit</a>
                            </td>
                            <td style="text-align: center;">
                                <a class="btn btn-flat-danger border"
                                onclick="return confirm('Are you sure?');"
                                href="{{ route('admin.testimonial.destroy', $tsti->id) }}">
                                Delete
                            </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

 

@endsection
