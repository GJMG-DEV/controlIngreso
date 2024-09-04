<div>
<table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Nombre</th>
                                        <th>Dni</th>
                                        <th>Unidad</th>
                                        <th>Hora INgreso</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach($usuarios as $value)
                                            <tr>

                                                <td>{{$value['apePaterno']}}</td>
                                                <td>{{$value['apeMaterno']}}</td>
                                                <td>{{$value['nombre']}}</td>
                                                <td>{{$value['dni']}}</td>
                                                <td>{{$value['unidad']}}</td>
                                                <td>{{$value['horaIngreso']}}</td>
                                            </tr>
                                        @endforeach

                                </tbody>
                            </table>
</div>
