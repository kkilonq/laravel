<x-layout>
	@foreach ($users1 as $users)
		<div>
			<h2>{{ $users->id }}</h2>
			<div>
				{{ $users->name}}
			</div>
		</div>
	@endforeach
</x-layout>
