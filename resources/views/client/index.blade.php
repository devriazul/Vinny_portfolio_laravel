@extends('layouts.main')
@section('content')
<div>
   <div class="about">
       <div class="container pl-5">
            <div class="title title-sm">ABOUT ME</div>
            <div class="col-md-6 p-0 pt-3">
                <p>Its my passion building state-of-the-art, easy to use, user friendly websites and applications. I actively seek out new technologies and stay up-to-date on industry trends and advancements.
                </p>
                <p>Am always ahead of the curve and deliver exceptional work to all of my employers, including those I've worked for on a project basis.</p>
           
            </div>
       </div>
       
   </div>

   <div class="experience">
       <div class="container pl-5">
            <div class="title title-sm mb-4">EXPERIENCE</div>
            <div class="timeline">
                <div class="entry">
                    <div class="title">
                    <h3>2018 Jan - Present</h3>
                    <p>CEO, Velmax Tech</p>
                    </div>
                    <div class="body">
                    <p>Founded Velmax Tech to provide web hosting services</p>
                    <ul>
                        <li>Web Hosting Services</li>
                        <li>Creating Student projects</li>
                        <li>Creating video tutorials on web development</li>
                       
                    </ul>
                    </div>
                </div>
                <div class="entry">
                    <div class="title">
                    <h3>2014 May - 2017</h3>
                    <p>ICT, Kiobegi High School</p>
                    </div>
                    <div class="body">
                    <p>Director of information and data systems.</p>
                    <ul>
                        <li>Developing and maintenance of school management system</li>
                        
                    </ul>
                    </div>
                </div>
            </div>
       </div>
   </div>

   <div class="education">
       <div class="container pl-5">
             <div class="title title-sm">EDUCATION</div>
             <div class="d-flex">
                 <div class="ed shadow-sm col ml-2 border-none">
                    <div>
                        <i class="fas fa-graduation-cap text-primary fa-2x"></i>
                        <h4 class="">Mt. Kenya University</h4>
                        <div class="text-muted">Bsc. Computer Science</div>
                        <div class="small">2012 - 2016</div>
                    </div>

                 </div>
                 <div class="ed shadow-sm col mr-2 border-none">
                    <div>
                        <i class="fas fa-graduation-cap text-primary fa-2x"></i>
                        <h4 class=" ">St. Ann's College</h4>
                        <div class="text-muted">Dip. Software Engineering</div>
                        <div class="small">2010 Dec - 2012 Mar</div>
                    </div>
                 </div>
             </div>
       </div>
   </div>

   <div class="skills">
        <div class="container pl-5">
             <div class="title title-sm">SKILLS & LANGUAGES</div>
             <div class="d-md-flex justify-content-between">
                 <div class="col-md-6">
                    
                    <div class="skill mt-2">
                        <div>HTML & CSS</div>
                        <div class="progress rounded-0">
                            <div class="progress-bar bg-primary rounded-0" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skill mt-3">
                        <div>Javascript / Vue Js</div>
                        <div class="progress rounded-0">
                            <div class="progress-bar bg-success rounded-0" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skill mt-3">
                        <div>Php / Laravel</div>
                        <div class="progress rounded-0">
                            <div class="progress-bar bg-warning rounded-0" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skill mt-3">
                        <div>Mysql Administration</div>
                        <div class="progress rounded-0">
                            <div class="progress-bar bg-info rounded-0" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="skill mt-3">
                        <div>React Js</div>
                        <div class="progress rounded-0">
                            <div class="progress-bar bg-danger rounded-0" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                 </div>

                 <div class="col-md-5 p-5 shadow">
                     
                     <div class="">
                         <h4>Languages</h4>
                         <ul class="ml-3 p-0 text-muted">
                             <li>English (Fluent)</li>
                             <li>Kiswahili</li>
                         </ul>
                     </div>
                 </div>
             </div>
       </div>
   </div>

   <div class="portfolio">
        <div class="container pl-5">
             <div class="title title-sm">PORTFOLIO</div>
             <div class="d-flex flex-wrap mt-3">
                <div class="port-tem col">
                    <img src="/assets/port/vin.png" class="shadow-sm" alt="Vincent Mogaka">
                    <div class="text-muted text-center p-2">Vincent Mogaka</div>
                </div>

                <div class="port-tem col">
                    <img src="/assets/port/ktj.png" class="shadow-sm"alt="Kill The Jigger">
                    <div class="text-muted text-center p-2">Kill The Jigger</div>
                </div>

                <div class="port-tem col">
                    <img src="/assets/port/vel.png" class="shadow-sm" alt="Velmax Tech">
                    <div class="text-muted text-center p-2">Velmax Tech</div>
                </div>
             </div>
       </div>
   </div>

    <div id="#contact" class="contact">
        <div class="container pl-5">
             <div class="title title-sm">SAY HELLO</div>
             <div class="d-flex">
                <div class="col-md-6">
                    <form action="" class="mt-4">
                        <div class="input-group mb-3">
                            <input type="text" name="" placeholder="Tell me your name" class="form-control rounded-0">
                        </div>
                         <div class="input-group mb-3">
                            <input type="text" name="" placeholder="Your email address" class="form-control rounded-0">
                        </div>
                         <div class="input-group mb-3">
                            <textarea name="" id="" class="form-control rounded-0" placeholder="Your message"></textarea>
                        </div>
                         <div class="input-group">
                            <input type="submit" name="send-msg" class="form-control rounded-0 btn-send" value="Send Message">
                        </div>
                    </form>
                </div>
             </div>
       </div>
   </div>
</div>
@endsection

@section('footer')
    <div id="footer">
        <div class="container p-0">
            &copy; 2019 - Vincent Mogaka
        </div>
    </div>
@endsection
