@extends('layouts.app')

@section('content')

    <div>
        <table>

          <thead>
            <tr>
              <th scope="col">SL</th>
              <th scope="col">Services</th>
              <th scope="col">Price</th>
            </tr>
          </thead>

          <tbody>
            @foreach($services as $key => $value)
            <tr>
              <th scope="row">{{ $value['SL'] }}</th>
              <td>{{ $value['Name'] }}</td>
              <td>{{ $value['Price'] }}</td>
            </tr>
            @endforeach
          </tbody>

        </table>       
    </div>

@endsection