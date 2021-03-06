@section('content')
<div class="grid_15 column">
	<div class="portlet">
		<div class="portlet-header">Edit Usergroup {{ $group->name }}</div>

		<div class="portlet-content">
			{{ Form::open(URL::to_action('admin@usergroups@edit', array($group->id))) }}

			{{ Form::label('name', 'Name') }}
			{{ Form::input('text', 'name', $group->name, array('class' => 'smallInput')) }}
			<input class="button" type="submit" value="{{ __('Admin::form.updateusergroup') }}"/>
			<input class="button_grey" type="submit" value="{{ __('Admin::form.reset') }}" />
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection