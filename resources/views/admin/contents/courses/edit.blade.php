@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Edit Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/courses/update/{{ $courses->id }}" method="post" class="mt-3">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $courses->name ?? '' }}">
                </div>

    
                
     <div class="mb-2">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Pilih Category</option>
                        <option value="Pemograman Web 2" {{$courses->desc == 'Pemograman Web 2' ? 'selected' : ''}}>Pemograman Web 2</option>
                        <option value="Basis Data" {{$courses->desc == 'Basis Data' ? 'selected' : ''}}>Basis Data</option>
                        <option value="Bahasa Inggris" {{$courses->desc == 'Bahasa Inggris' ? 'selected' : ''}}>Bahasa Inggris</option>
                        <option value="UI/UX" {{$courses->desc == 'UI/UX' ? 'selected' : ''}}>UI/UX</option>
                        <option value="Statistika & Probabilitas" {{$courses->desc == 'Statistika & Probabilitas' ? 'selected' : ''}}>Statistika & Probabilitas</option>
                        <option value="PPKN" {{$courses->desc == 'PPKN' ? 'selected' : ''}}>PPKN</option>
                        <option value="Jaringan Komputer" {{$courses->desc == 'Jaringan Komputer' ? 'selected' : ''}}>Jaringan Komputer</option>
                        <option value="Komunikasi Efektif" {{$courses->desc == 'Komunikasi Efektif' ? 'selected' : ''}}>Komunikasi Efektif</option>
                    </select>
                </div> 

                <div class="mb-2">
                    <label for="desc" class="form-label">Desc</label>
                    <input type="text" name="class" id="class" class="form-control" value="{{ $courses->class ?? '' }}">
                </div>

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </section>
@endsection