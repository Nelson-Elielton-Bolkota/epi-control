@extends('layouts.app')

@section('title', 'EPIs')

@section('content')
<div class="container py-4">
	<div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
		<div>
			<h1 class="h3 mb-1">Equipamentos de Proteção Individual</h1>
			<p class="text-muted mb-0">Gerencie os EPIs cadastrados no sistema.</p>
		</div>
		<a href="{{ route('epis.create') }}" class="btn btn-primary">
			<i class="bi bi-plus-lg"></i> Novo EPI
		</a>
	</div>

	@if (session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
		</div>
	@endif

	<div class="card shadow-sm border-0">
		<div class="card-body p-0">
			@if ($epis->count())
				<div class="table-responsive">
					<table class="table table-hover align-middle mb-0">
						<thead class="table-light">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">CA</th>
								<th scope="col">Quantidade</th>
								<th scope="col">Validade</th>
								<th scope="col" class="text-end">Ações</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($epis as $epi)
								<tr>
									<td>{{ $epi->nome }}</td>
									<td>{{ $epi->ca ?? '—' }}</td>
									<td>{{ $epi->quantidade ?? '—' }}</td>
									<td>{{ $epi->validade ? $epi->validade->format('d/m/Y') : '—' }}</td>
									<td class="text-end">
										<a href="{{ route('epis.edit', $epi) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
										<form action="{{ route('epis.destroy', $epi) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja excluir este EPI?')">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-sm btn-outline-danger">Excluir</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>

				@if (method_exists($epis, 'links'))
					<div class="p-3">{{ $epis->links() }}</div>
				@endif
			@else
				<div class="text-center py-5 px-3">
					<h2 class="h5">Nenhum EPI cadastrado</h2>
					<p class="text-muted">Comece cadastrando o primeiro equipamento.</p>
					<a href="{{ route('epis.create') }}" class="btn btn-primary">Cadastrar EPI</a>
				</div>
			@endif
		</div>
	</div>
</div>
@endsection
