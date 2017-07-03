@extends('partials.layout')

@section('content')

    <section class="inner-slider">
      <div style="background: url('{{ asset('images/slider_bg.png') }}')"></div>
    </section>

    <div class="content-top"></div>

    <section id="main-content">

 
           
           <!-- NEWS POST START -->
            <div class="small-16 large-16 columns">

                <article class="blog-entry row">
                    <div class="article-date small-16 medium-2 columns">
                        <div>
                            <p>Jul <span class="day">01</span> <span class="year">2017</span></p>
                        </div>
                    </div>

                    <div class="article-content small-16 medium-14 columns">
                        <h3>Ddos protection.</h3>
                        <p>
                            We always want to make sure you guys know when we have some downtime, these can almost everytime be found on our discord server. We recently had some downtime since we installed a new ddos protection for our site. Thanks for your support :). / Wazz (Web Developer)
                        </p>
                    </div>
                </article>
            </div>

           <div class="row">
              <div class="small-16 columns">
                  <div class="big-sep"></div>
              </div>
           </div>

           <!-- NEWS POST END -->

           <!-- NEWS POST START -->
           <div class="small-16 large-16 columns">

               <article class="blog-entry row">
                   <div class="article-date small-16 medium-2 columns">
                       <div>
                           <p>Jun <span class="day">30</span> <span class="year">2017</span></p>
                       </div>
                   </div>

                   <div class="article-content small-16 medium-14 columns">
                       <h3>Heads up.</h3>
                       <p>
                           Hello Heroes!
You might have noticed that recently we changed the name of our project and that happened for a good reason.
Our Project started within the BFH community and from the beginning we had some set up goals, some time passed and we joined the Revive Network, a community of every EA cracked game which would help us a lot but things did not turn out well.<br>
We didn’t had much freedom to work like we wanted to and the Revive Network stated that they only want to bring the game to the last known official version and make no further improvements.<br>
Our end goal is to release and make modifications to the game such as nerf overpowered guns, buff underpowered games, add more content, if possible remove the luck based gameplay and make it more of a skilled gameplay by removing random criticals which may give advantage to some players without any skilled involved, etc.<br>
For all the previously mentioned reasons we decided to split from the Revive Network and there are now 2 different groups working separately to bring back BFH.<br>
Our Heroes Awaken community is now working with MakaHost, one of the developers who wrote the backend for being able to load the client and play the tutorial and if everything goes as planned we estimate the online multiplayer version to be released within 1-3 months.<br> /made by BFHPTPIRATE (community manager) publiced by Wazz (Web Developer)                 
                     </p>
                   </div>
               </article>
           </div>

           <div class="row">
               <div class="small-16 columns">
                   <div class="big-sep"></div>
               </div>
           </div>

           <!-- NEWS POST END -->

           <!-- NEWS POST START -->
           <div class="small-16 large-16 columns">

               <article class="blog-entry row">
                   <div class="article-date small-16 medium-2 columns">
                       <div>
                           <p>Jun <span class="day">30</span> <span class="year">2017</span></p>
                       </div>
                   </div>

                   <div class="article-content small-16 medium-14 columns">
                       <h3>We are bringing back BFH!</h3>
                       <p>
                           Be sure to visit our <a href="https://discordapp.com/invite/WhK8RgX">Discord channel</a> to keep up with our latest news and announcements.
                       </p>
                   </div>
               </article>
           </div>

           <div class="row">
               <div class="small-16 columns">
                   <div class="big-sep"></div>
               </div>
           </div>

           <!-- NEWS POST END -->

       </div>

    </section>

@endsection
