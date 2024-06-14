@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <a href="/admin/course/create" class="btn btn-primary my-2">+ Course</a>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Desc</th>
                    <th>Action</th>
                </tr>
                @foreach($courses as $courses)
                    <tr>
                        <td>1</td>
                        <td>{{$courses->name }}</td>
                        <td>{{$courses->category }}</td>
                        <td>{{$courses->desc }}</td>
                        <td>
                          <a href="/admin/courses/edit/{{ $courses->id }}" class="btn btn-warning me-2">Edit</a>
                          <form action="/admin/courses/delete/{{ $courses->id }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                          
                          </form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
  </section>
@endsection