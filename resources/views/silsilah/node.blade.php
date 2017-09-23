<li>
    <a href="#">Parent</a>
    <ul>
        <li>
            <a href="#">Child</a>
            <ul>
                <li>
                    <a href="#">Grand Child</a>
                </li>
            </ul>
        </li>
        <?php
        $people = \App\Person::where('orang_tua_id',$node)->get();
        ?>

        @foreach($people as $data)
            \App\Http\Controllers\SilsilahController::viewSilsilah($data->id)
        @endforeach
    </ul>
</li>