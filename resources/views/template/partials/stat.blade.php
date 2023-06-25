@if ($data['status'] == 'publish')
<span class="badge badge-primary">Publish</span>
@elseif ($data['status'] == 'pending')
<span class="badge badge-warning">Pending</span>
@endif