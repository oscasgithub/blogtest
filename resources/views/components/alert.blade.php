
<!-- solo si se utilizan slots sin nombre 
    [@]props(['title']) -->

    @props(['type' => 'default', 'title' => 'alert'])    

    @php
        switch ($type) {           
            case 'info':
                $clases = "bg-blue-100; border-blue-500 text-blue-700";
                break;
            
            case 'danger':
                $clases ="bg-red-100; border-red-500 text-red-700";
            break;

            default:
                $clases ="bg-yellow-100; border-yellow-500 text-yellow-700";
                break;
        }

    @endphp

<article {{ $attributes->merge(["class" => " border-l-4  p-4 $clases ", "role" => "alert"]) }} >
    <h1 class="font-bold"> {{ $title }} </h1>
    {{ $slot }}
</article>