@extends ('template')

@section('section')
<div class="text-center">
    <div>
        <img class="rounded-circle imagen-perfil" src="{{asset("img/img.jpg")}}" alt="">
    </div>

    <div class="mb-5 mt-5  container col-12">
        <div class="row flex-nowrap ">
            <div class="trabajo col-2 d-flex align-items-center">
                Marzo 27 - 2020
            </div>
                <div class="border trabajo col-4">
                    <h2>Programador FrontEnd</h2>
                    <p>Desarrollo FrontEnd con bootstrap, JavasScript, hojas de estilos
                         y frameworks varios
                    </p>
                </div>
                <div class="border trabajo col-4">
                    <h2>Analista de sistemas</h2>
                    <p>Encargado de levantamiento de requisitos,
                         diseño y arquitectura de software, control
                         de calidad.
                    </p>
                </div>
            <div class="trabajo col-2 d-flex align-items-center">
                NiCat-GameDev
            </div>
        </div>
    </div>

    <div class="mb-5 mt-5 container col-12">
        <div class="row flex-nowrap">
            <div class="trabajo col-2 d-flex align-items-center">
                Febrero 18 - 2018
            </div>
                <div class="border trabajo col-8">
                    <h2>Soporte Técnico</h2>
                    <p>Reparación y mantenimiento de equipos computacionales y asegurar
                        el buen funcionamiento siguiendo estándares actuales.
                    </p>
                </div>
            <div class="trabajo col-2 d-flex align-items-center">
                Restart Inc.
            </div>
        </div>
    </div>
</div>
@endsection
