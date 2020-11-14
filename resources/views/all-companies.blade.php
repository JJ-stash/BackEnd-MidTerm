@extends('layouts.main')


@section('content')
<div class="card">
  <div class="card-header">
    <h4>All Compannies</h4>
  </div>
  <div class="card-body">
   
      
      <table class="table" cellpadding="10" >
        <form action="{{ route('companies.all') }}">
          <tr>
            <td><input class="form-control" type="text" name="name" value="{{ request('name') }}" placeholder="Name" style="wnameth:70px" ></td>
            <td><input class="form-control" type="text" name="code" value="{{ request('code') }}" placeholder="Code"></td>
            <td><input class="form-control" type="text" step="any" name="address" value="{{ request('address') }}" placeholder="Address"></td>
            <td><input class="form-control" type="text" step="any" name="city" value="{{ request('city') }}" placeholder="City"></td>
            <td><input class="form-control" type="text" name="country" value="{{ request('country') }}" placeholder="Country"></td>
            <td colspan="2"><button class="btn btn-success"type="submit">Filter</button></td>
          </tr>
        </form>

        <tr>
          <th>Name</th>
          <th>Code</th>
          <th>Address</th>
          <th>City</th>
          <th>Country</th>
          <th>Actions</th>
        </tr>
        
        <form action="{{ route('companies.add') }}" method="POST" >
          @csrf
          <tr>
            <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Enter Company Name"></td>
            <td><input class="form-control" type="text" step="any" name="code" placeholder="Enter Company Code"></td>
            <td><input class="form-control" type="text" name="address" placeholder="Enter Company Address"></td>
            <td><input class="form-control" type="text" name="city" placeholder="Enter Company City"></td>
            <td><input class="form-control" type="text" name="country" placeholder="Enter Company Country"></td>
            <td><button class="btn btn-success"type="submit">Add</button></td>
            <td>#</td>
          </tr>
        </form>

        @foreach($companies as $pr)
          <tr>
            <td>{{ $pr->name }}</td>
            <td>{{ $pr->code }}</td>
            <td>{{ $pr->address }}</td>
            <td>{{ $pr->city }}</td>
            <td>{{ $pr->country }}</td>
            <td>
              <form action="{{ route('companies.delete') }}" method="post">
                @csrf
                <input type="hidden" name="company_id" value="{{ $pr->id }}" />
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        
      </table>
  </div>
</div>
  
@endsection