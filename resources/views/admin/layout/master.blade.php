<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('admin.layout.top');

</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('admin.layout.sidebar');
            <!-- wrap @s -->
            <div class="nk-wrap ">
     
                @include('admin.layout.topheader');

                 
          {{-- dashboard --}}

          @yield('content')

            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    
    

</body>
@include('admin.layout.bottom');
</html>