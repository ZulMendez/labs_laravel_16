<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @foreach ($contacts as $item)
                    <div class="section-title left">
                        <h2>{{$item->titre}}</h2>
                    </div>
                    <p>{{$item->description}}</p>
                    <h3 class="mt60">{{$item->soustitre}}</h3>
                    <p class="con-item">{{$item->adresse}}<br> {{$item->adresse2}} </p>
                    <p class="con-item">{{$item->tel}}</p>
                    <p class="con-item">{{$item->email}}</p>                    
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form action="{{route('mail')}}" method="POST" class="form-class">
                    @csrf
                    <input type="hidden" name="contactStore" id="contactStore">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="name" name="name" placeholder="Your name">
                            @error('name')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="mail" name="mail" placeholder="Your email">
                            @error('mail')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-12">
                            <select name="subject" style="background-color:#f6edfb; width:100%; padding-top:10px; padding-bottom:10px; margin-bottom:10px;">
                                @foreach ($sujets as $suj)
                                    <option value="{{$suj->id}}">{{$suj->option}}</option>
                                @endforeach
                            </select>
                            @error('subject')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                            @error('message')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->