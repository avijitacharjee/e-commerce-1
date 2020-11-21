@extends('template')
@section('content')
    <a href="{{URL::to('/products/insert')}}">Insert</a>
    <table>
        <thead>
            <td>
                Name
            </td>
            <td>
                Price
            </td>
            <td>
                Quantity
            </td>
            <td>
                Image
            </td>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->quantity }}
                    </td>
                    <td>
                        <img src="{{$product->images}}" alt="" srcset="" height ="100" width ="100" >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection