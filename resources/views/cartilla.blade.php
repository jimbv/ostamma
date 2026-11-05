@extends('layouts.plantilla')
@section('contenido')
<section class="bg-white">
    <div class="max-w-screen-xl mx-auto px-5 py-10">
        <h2 class="text-2xl md:text-3xl font-black text-primary uppercase text-center mb-4 pt-3"
            style="font-family: Nunito;">
            Cartilla de prestadores
        </h2>

        <div class="text-center mb-5 d-flex flex-wrap justify-content-center gap-3">
            <a href="/prestadores.xls"
                class="btn btn-primary"
                style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
                target="_blank">
                <i class="fa-solid fa-file-excel me-1"></i>
                Descargar cartilla (Excel)
            </a>

            <a href="/coseguros_vigentes.pdf"
                class="btn btn-primary"
                style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
                target="_blank">
                <i class="fa-solid fa-file-invoice-dollar me-1"></i>
                Coseguros vigentes
            </a>

            <a href="/SSS.pdf"
                class="btn btn-primary"
                style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
                target="_blank">
                <i class="fa-solid fa-file-pdf me-1"></i>
                Disposición DI-2025-111698318-APN-GCP#SSS
            </a>
        </div>

        @php
            $vademecums = [
                ['titulo' => 'Ambulatorio', 'plan' => 'Plan Clásico / PMO', 'archivo' => 'Vademecum_Ambulatorio_Clasico-PMO_A5.pdf', 'icono' => 'fa-pills', 'superior' => false],
                ['titulo' => 'Ambulatorio', 'plan' => 'Plan Superior', 'archivo' => 'Vademecum_Ambulatorio_Superior_A5.pdf', 'icono' => 'fa-pills', 'superior' => true],
                ['titulo' => 'Crónicos', 'plan' => 'Plan Clásico / PMO', 'archivo' => 'Vademecum_Cronicos_Clasico-PMO_A5.pdf', 'icono' => 'fa-heart-pulse', 'superior' => false],
                ['titulo' => 'Crónicos', 'plan' => 'Plan Superior', 'archivo' => 'Vademecum_Cronicos_Superior_A5.pdf', 'icono' => 'fa-heart-pulse', 'superior' => true],
            ];
        @endphp

        <div class="vademecum-section mb-5">
            <div class="text-center mb-4">
                <h3 class="vademecum-heading">
                    <i class="fa-solid fa-prescription-bottle-medical me-2"></i>Vademécum
                </h3>
                <p class="text-muted mb-0">Consultá los medicamentos cubiertos según tu plan y tipo de tratamiento.</p>
            </div>

            <div class="row g-3 g-md-4">
                @foreach ($vademecums as $v)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="vademecum-card {{ $v['superior'] ? 'is-superior' : '' }}">
                            <div class="vademecum-icon">
                                <i class="fa-solid {{ $v['icono'] }}"></i>
                            </div>
                            <span class="vademecum-badge">{{ $v['plan'] }}</span>
                            <h4 class="vademecum-title">Vademécum {{ $v['titulo'] }}</h4>
                            <div class="vademecum-actions">
                                <a href="{{ asset('vademecum/' . $v['archivo']) }}" target="_blank" rel="noopener"
                                    class="vademecum-btn vademecum-btn-primary">
                                    <i class="fa-regular fa-eye me-1"></i> Ver
                                </a>
                                <a href="{{ asset('vademecum/' . $v['archivo']) }}" download
                                    class="vademecum-btn vademecum-btn-outline" aria-label="Descargar Vademécum {{ $v['titulo'] }} {{ $v['plan'] }}">
                                    <i class="fa-solid fa-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @livewire('provider-filter')
            </div>

        </div>
</section>
@endsection

@section('scripts')
@livewireScripts
@stop
@section('styles')
@livewireStyles
<style>
    .vademecum-section {
        background: linear-gradient(135deg, #f4f8fb 0%, #eaf1f6 100%);
        border-radius: 16px;
        padding: 2rem 1.25rem;
    }
    @media (min-width: 768px) {
        .vademecum-section { padding: 2.5rem 2rem; }
    }
    .vademecum-heading {
        font-family: Nunito, sans-serif;
        font-weight: 900;
        color: #003a5d;
        text-transform: uppercase;
        font-size: 1.4rem;
        margin-bottom: .35rem;
    }
    .vademecum-card {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background: #fff;
        border-radius: 14px;
        padding: 1.5rem 1.25rem 1.25rem;
        border-top: 4px solid #5b8db3;
        box-shadow: 0 2px 10px rgba(0, 58, 93, .08);
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .vademecum-card.is-superior { border-top-color: #003a5d; }
    .vademecum-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 24px rgba(0, 58, 93, .15);
    }
    .vademecum-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 58, 93, .08);
        color: #003a5d;
        font-size: 1.35rem;
        margin-bottom: 1rem;
    }
    .vademecum-badge {
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-transform: uppercase;
        color: #5b8db3;
        margin-bottom: .25rem;
    }
    .vademecum-card.is-superior .vademecum-badge { color: #003a5d; }
    .vademecum-title {
        font-family: Nunito, sans-serif;
        font-weight: 800;
        font-size: 1.1rem;
        color: #1f2d3a;
        margin-bottom: 1.25rem;
    }
    .vademecum-actions {
        margin-top: auto;
        display: flex;
        gap: .5rem;
        width: 100%;
    }
    .vademecum-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: .5rem .9rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: .9rem;
        text-decoration: none;
        transition: background .2s ease, color .2s ease;
    }
    .vademecum-btn-primary {
        flex: 1;
        background: #003a5d;
        color: #fff;
    }
    .vademecum-btn-primary:hover { background: #00507f; color: #fff; }
    .vademecum-btn-outline {
        border: 1.5px solid #003a5d;
        color: #003a5d;
        background: transparent;
    }
    .vademecum-btn-outline:hover { background: #003a5d; color: #fff; }
</style>
@stop