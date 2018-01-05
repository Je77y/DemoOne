@foreach($dschude as $key => $chude)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>
    	<img class="attachment-img" alt="{{ $chude->tenchude }}" src="upload/{{ $chude->hinhanh }}" style="width: 80px; height: 80px">
    </td>
    <td>{{ $chude->tenchude }}</td>
    <td>
    	@if($chude->duan == 0)
    		<span class="pull-right badge bg-aqua">Chủ đề</span>
    	@else
			<span class="pull-right badge bg-green">Dự án</span>
    	@endif
    </td>
    <td>{{ $chude->tomtat }}</td>
    <td>
        <a href="javascript:void(0)" onclick="suachude({{ $chude->id }})"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
        <a href="javascript:void(0)" onclick="xoachude({{ $chude->id }})" style="color: #f56954"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
    </td>
</tr>
@endforeach
