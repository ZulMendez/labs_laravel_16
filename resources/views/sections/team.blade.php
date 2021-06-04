<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{{$team[0]->titre}}</h2>
        </div>
        <div class="row">
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('img/team/' . $teamC[2]->photo->url)}}" alt="">
                    <h2>{{$teamC[2]->nom}}</h2>
                    <h3>{{$teamC[2]->poste->titre}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('img/team/' . $centre[0]->photo->url)}}" alt="">
                    <h2>{{$centre[0]->nom}}</h2>
                    <h3>{{$centre[0]->poste->titre}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('img/team/' . $teamC[1]->photo->url)}}" alt="">
                    <h2>{{$teamC[1]->nom}}</h2>
                    <h3>{{$teamC[1]->poste->titre}}</h3>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Team Section end-->