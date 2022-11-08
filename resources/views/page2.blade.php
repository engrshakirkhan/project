<link href="{{ asset('css/data.css') }}" rel="stylesheet" type="text/css">
<div class="container">
	
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="image" class="filter__link" href="#">Image</a></div>
			<div class="header__item"><a id="name" class="filter__link filter__link--number" href="#">Name</a></div>
			<div class="header__item"><a id="fname" class="filter__link filter__link--number" href="#">Father Name</a></div>
			<div class="header__item"><a id="age" class="filter__link filter__link--number" href="#">Age</a></div>
			<div class="header__item"><a id="gender" class="filter__link filter__link--number" href="#">Gender</a></div>
		</div>
        @foreach($members as $member)
		<div class="table-content">	
			<div class="table-row">		
				<div class="table-data"><img src="{{url('public/images/'. $member['imagename'])}}" style="height: 70px; width: 70px;"></div>
				<div class="table-data">{{$member['name']}}</div>
				<div class="table-data">{{$member['fname']}}</div>
				<div class="table-data">{{$member['age']}}</div>
				<div class="table-data">{{$member['gender']}}</div>
			</div>
			</div>	
            @endforeach
	</div>
</div>



<!-- <link href="{{ asset('css/data.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<hr>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Image</span></th>
                                <th><span>Name</span></th>
                                <th><span>Father Name</span></th>
                                <th><span>Age</span></th>
                                <th class="text-center"><span>Gender</th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $member)
                                <tr>
                                <td><img src="{{asset('public/images'. $member['imagename'])}}"></td>
                                    <td><center>{{$member['name']}}</center></td>
                                    <td><center>{{$member ['fname']}}</center></td>
                                    <td><center>{{$member['age']}}</center></td>
                                    <td><center>{{$member['gender']}}</center></td>
                                    </tr>
                                    <td style="width: 20%;">
                                        <a href="#" class="table-link  text-warning">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="table-link  text-info">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <link href="{{ asset('css/data.css') }}" rel="stylesheet" type="text/css">
<h1>Data</h1>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<hr>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th>Image</th>
                                <th><span>Name</span></th>
                                <th><span>father</span></th>
                                <th><span>Age</span></th>
                                <th><span>Gender</span></th>
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($members as $member)
                                <tr>
                                    <td><img src="{{asset('public/images'. $member['imagename'])}}"></td>
                                    <td>{{$member['name']}}</td>
                                    <td>{{$member ['fname']}}</td>
                                    <td>{{$member['age']}}</td>
                                    <td>{{$member['gender']}}</td
                                </tr>
                                @endforeach
</tbody>
       </table>
            </div>
                </div>
                        </div>
                                </div>
                                        </div>
                                                </div> --> -->