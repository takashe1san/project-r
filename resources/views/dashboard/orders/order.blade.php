<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order [{{$order->id}}]</title>
    
    <link href="{{ asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('../assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" /> --}}
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
                <th class="text-center">unit price</th>
                <th class="text-center">quantity</th>
                <th class="text-center">price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td class="text-center">{{ $item->product->name }}</td>
                    <td class="text-center">{{ $item->product->price }}</td>
                    <td class="text-center">{{ $item->quantity }}</td>
                    <td class="text-center">{{ $item->total_price }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <div class="d-flex justify-content-between">
        <div class="border border-dark text-center pt-2"> 
            <span class="">امسح الرمز لاستلام الطلبية</span>
            
            <div class="border-top p-3 mt-2">
                {{$qrCode}}
    
            </div>
        </div>
        <div class="text-right" dir="rtl">
            زبوننا العزيز<br>
            يرجى اتباع الخطوات التالية:
            <ul>
                <li>سلم المبلغ لموظف التوصيل</li>
                <li>خذ الطلبية من الموظف</li>
                <li>امسح الرمز لتأكيد استلامك الطلبية</li>
                <li>أرِ السائق نافذة استلام الطلب</li>
            </ul>
        </div>
    </div>
    <script>
        setTimeout(() => {
            window.print();
        }, 500);
    </script>
</body>
</html>