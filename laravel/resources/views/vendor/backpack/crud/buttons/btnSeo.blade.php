@if (!empty($entry->seo))
	<a href="{{ url('admin/seo/'.$entry->seo->id.'/edit') }}" class="btn btn-xs btn-warning ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-star"></i> Seo </span></a>
@endif
