@foreach($lists as $list)


<h2>{{$list->l_name}}</h2>

<ul>
@foreach($list->contacts as $key=>$l)


Contacts:<li style="color:blue">{{$l->c_mail[$key]}}</li>


@endforeach

</ul>

@endforeach