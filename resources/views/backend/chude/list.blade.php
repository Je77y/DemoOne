@foreach($dschude as $key => $chude)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>
    	<img class="attachment-img center" alt="{{ $chude->tenchude }}" src="/upload/{{ $chude->hinhanh }}" style="width: 50px; height: 50px">
    </td>
    <td>{{ $chude->tenchude }}</td>
    <td class="center">
    	@if($chude->duan == 0)
    		<span class=" badge bg-aqua">Chủ đề</span>
    	@else
			<span class=" badge bg-green">Dự án</span>
    	@endif
    </td>
    <td>{{ $chude->tomtat }}</td>
    <td class="center">
        <a href="javascript:void(0)" onclick="suachude({{ $chude->id }})"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
        <a href="javascript:void(0)" onclick="xoachude({{ $chude->id }})" style="color: #f56954"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
    </td>
</tr>
@endforeach
