<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order [{{$order->id}}]</title>
    
    <link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <table class="table" dir="ltr">
        <tr>
            <td class="px-4">
                name
            </td>
            <td class="px-4">
                {{$order->owner->name}}
            </td>
        </tr>
        <tr>
            <td class="px-4">
                phone
            </td>
            <td class="px-4">
                {{$order->owner->phone}}
            </td>
        </tr>
        <tr>
            <td class="px-4">
                total
            </td>
            <td class="px-4">
                {{$order->total}}
            </td>
        </tr>
        <tr>
            <td class="px-4">
                Address
            </td>
            <td class="px-4">
                {{$order->address}}
            </td>
        </tr>
        <tr>
            <td class="px-4">
                date
            </td>
            <td class="px-4">
                {{$order->created_at}}
            </td>
        </tr>
    </table>
    <hr>
    <table class="table table-striped"  dir="ltr">
        <thead>
            <tr>
                <th class="text-center">name</th>
                <th class="text-center">quantity</th>
                <th class="text-center">price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td class="text-center">{{ $item->product->name }}</td>
                    <td class="text-center">{{ $item->quantity }}</td>
                    <td class="text-center">{{ $item->total_price }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        setTimeout(() => {
            window.print();
        }, 500);
    </script>
</body>
</html>