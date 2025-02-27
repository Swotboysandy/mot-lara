@extends('layouts.app')

@section('MultiorionTech', 'The North Star')

@section('content')
<div id="content">
      <div class="slider-block style-one mt-60">
        <div class="container"> 
          <div class="row row-gap-32">
            <div class="col-xl-4 col-12">
              <div class="text">
                <div class="heading2 pr-55">IT services for small to mid-Sized companies</div>
                <div class="body2 mt-16">We provide custom software solutions for any industry. Creating high - value software and technology for your business. </div>
              </div>
              <div class="block-button mt-40 d-flex gap-16 flex-wrap"><a class="button hover-button bg-blue text-white border-none" href="about-us.html"> <span>Explore More</span></a><a class="button hover-button bg-grey border-none" href="contact-us.html"> <span>Contact</span></a></div>
            </div>
            <div class="col-xl-8 col-12">
              <div class="bg-img w-100"><img class="w-100" src="assets/images/slider/slider1.png" alt=""/></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-about mt-60"> 
        <div class="container"> 
          <div class="content">
            <div class="row row-gap-12 pb-40">
              <div class="col-12 col-xl-5 col-md-6">
                <div class="text-label text-white bg-blue">About Us</div>
                <div class="heading3 text-white mt-16">We solve technology challenges.</div>
              </div>
              <div class="col-12 col-md-6"> 
                <div class="desc text-white">Your IT Services Partner! We offer customized IT solutions, from managed services to cloud computing and cybersecurity. Empower your business with our expertise for growth and efficiency. </div><a class="text-button-small text-white border-underline-white-2px mt-16" href="about-us.html">Join us today!</a>
              </div>
            </div>
            <div class="line"></div>
            <div class="counter row row-gap-24 pt-40">
              <div class="col-6 col-md-3"> 
                <div class="counter-item"> 
                  <div class="count-number heading3 text-white">20</div>
                  <div class="body1 mt-4 text-white">Years experiences</div>
                </div>
              </div>
              <div class="col-6 col-md-3"> 
                <div class="counter-item"> 
                  <div class="flex-item-center">
                    <div class="count-number heading3 text-white">1.8</div><span class="heading3 text-white">k</span>
                  </div>
                  <div class="body1 mt-4 text-white">Happy customers</div>
                </div>
              </div>
              <div class="col-6 col-md-3"> 
                <div class="counter-item"> 
                  <div class="count-number heading3 text-white">460</div>
                  <div class="body1 mt-4 text-white">Project completed</div>
                </div>
              </div>
              <div class="col-6 col-md-3"> 
                <div class="counter-item"> 
                  <div class="count-number heading3 text-white">15</div>
                  <div class="body1 mt-4 text-white">Awards achievement</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-benefit mt-80">
        <div class="container"> 
          <div class="row row-gap-40">
            <div class="col-12 col-lg-3 col-sm-6">
                    <div class="benefit-item ">
                      <div class="block-icon"> <i class="ph ph-medal fs-42"></i></div>
                      <div class="heading6 mt-8">Expertise</div>
                      <div class="text-on-surface-variant1 mt-8">Access to specialized knowledge and technology expertise for effective IT solutions.</div>
                    </div>
            </div>
            <div class="col-12 col-lg-3 col-sm-6">
                    <div class="benefit-item ">
                      <div class="block-icon"> <i class="ph ph-money fs-42"></i></div>
                      <div class="heading6 mt-8">Cost Savings</div>
                      <div class="text-on-surface-variant1 mt-8">Avoiding expenses associated with maintaining an in-house IT department.</div>
                    </div>
            </div>
            <div class="col-12 col-lg-3 col-sm-6">
                    <div class="benefit-item ">
                      <div class="block-icon"> <i class="ph ph-fingerprint fs-42"></i></div>
                      <div class="heading6 mt-8">Enhanced Security</div>
                      <div class="text-on-surface-variant1 mt-8">Robust measures to protect against cyber threats and ensure data security.</div>
                    </div>
            </div>
            <div class="col-12 col-lg-3 col-sm-6">
                    <div class="benefit-item ">
                      <div class="block-icon"> <i class="ph ph-chart-line-up fs-42"></i></div>
                      <div class="heading6 mt-8">Increased Efficiency</div>
                      <div class="text-on-surface-variant1 mt-8">Streamlined operations, automation, and proactive monitoring for improved productivity.</div>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-solution bg-linear mt-80 pt-80 pb-80"> 
        <div class="container text-center">
          <div class="text-label text-blue text-center pt-4 pb-4 pl-12 pr-12 bg-grey bora-2 display-inline-block">How we do</div>
          <div class="heading3 text-center mt-12">Our solutions</div>
          <div class="row row-gap-40 mt-40 sub-nav-solution">
            <div class="col-12 col-xl-4 col-sm-6">
                    <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Solutions" data-item="solution1"><a class="main-item flex-column-item-center" href="service-detail.html"><i class="icon-phone-sync fs-60 text-blue"></i>
                        <div class="service-name heading5 text-center mt-24">Managed IT Services</div>
                        <div class="service-desc text-on-surface-variant1 text-center mt-12">Outsourcing IT management and maintenance, including network monitoring, data backup, cybersecurity, help desk support.</div></a>
                    </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-6">
                    <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Services" data-item="solution2"><a class="main-item flex-column-item-center" href="service-detail.html"><i class="icon-user-sync fs-60 text-blue"></i>
                        <div class="service-name heading5 text-center mt-24">IT Consulting</div>
                        <div class="service-desc text-on-surface-variant1 text-center mt-12">Strategic guidance on IT strategy, digital transformation, software implementation, and project management.</div></a>
                    </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-6">
                    <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Services" data-item="solution3"><a class="main-item flex-column-item-center" href="service-detail.html"><i class="icon-device-cloud fs-60 text-blue"></i>
                        <div class="service-name heading5 text-center mt-24">Cloud Computing</div>
                        <div class="service-desc text-on-surface-variant1 text-center mt-12">Access to remote servers and infrastructure for data storage, application hosting, and scalable resources.</div></a>
                    </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-6">
                    <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Solutions" data-item="solution4"><a class="main-item flex-column-item-center" href="service-detail.html"><i class="icon-cloud-dots fs-60 text-blue"></i>
                        <div class="service-name heading5 text-center mt-24">Cybersecurity Solutions</div>
                        <div class="service-desc text-on-surface-variant1 text-center mt-12">Protecting businesses from cyber threats through measures like network security, encryption, and training.</div></a>
                    </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-6">
                    <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Services" data-item="solution5"><a class="main-item flex-column-item-center" href="service-detail.html"><i class="icon-phone-cloud fs-60 text-blue"></i>
                        <div class="service-name heading5 text-center mt-24">Data Analytics</div>
                        <div class="service-desc text-on-surface-variant1 text-center mt-12">Services for data storage, backup, integration, governance, and analytics to drive insights and informed decisions.</div></a>
                    </div>
            </div>
            <div class="col-12 col-xl-4 col-sm-6">
                    <div class="solution-item service-item nav-item-main p-40 bora-20 bg-white h-100" data-cate="IT Solutions" data-item="solution5"><a class="main-item flex-column-item-center" href="service-detail.html"><i class="icon-device-sync fs-60 text-blue"></i>
                        <div class="service-name heading5 text-center mt-24">Software Development</div>
                        <div class="service-desc text-on-surface-variant1 text-center mt-12"> Custom software development and integration services to meet specific business needs.</div></a>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-service mt-80"> 
        <div class="container"> 
          <div class="row gy-2 flex-between">
            <div class="col-xl-8 col-md-9 col-12">
              <div class="text-label text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-2 display-inline-block">What we do</div>
              <div class="heading3 mt-12">Solve technology problems in every industry that customers need.</div>
            </div>
            <div class="col-lg-2 col-md-3 col-12 text-end"><a class="text-button border-underline-blue display-inline-block" href="service-detail.html">View All industries</a></div>
          </div>
          <div class="row mt-40 row-gap-12 sub-nav-solution">
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Finance Consulting" data-item=""><i class="ph ph-bank fs-24"></i>
                <div class="service-name heading6 pl-12">Finance & Banking</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="IT Services" data-item=""><i class="ph ph-rocket fs-24"></i>
                <div class="service-name heading6 pl-12">Information Technology & Telecommunications</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Medical Solutions" data-item=""><i class="ph ph-first-aid-kit fs-24"></i>
                <div class="service-name heading6 pl-12">Healthcare & Pharmaceuticals</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Transportation Solutions" data-item=""><i class="ph ph-airplane-takeoff fs-24"></i>
                <div class="service-name heading6 pl-12">Transportation & Logistics</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="IT Services" data-item=""><i class="ph ph-warehouse fs-24"></i>
                <div class="service-name heading6 pl-12">Real Estate</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Future Industry" data-item=""><i class="ph ph-wrench fs-24"></i>
                <div class="service-name heading6 pl-12">Manufacturing & Industry 4.0</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Education Solutions" data-item=""><i class="ph ph-basket fs-24"></i>
                <div class="service-name heading6 pl-12">Education & Training</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Environmental Resources" data-item=""><i class="ph ph-lightbulb-filament fs-24"></i>
                <div class="service-name heading6 pl-12">Energy & Environment</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Electronic Commerce" data-item=""><i class="ph ph-graduation-cap fs-24"></i>
                <div class="service-name heading6 pl-12">E-commerce & Retail</div></a></div>
            <div class="col-sm-6 col-12"> <a class="service-item nav-item-main bg-surface pt-16 pb-16 pl-20 pr-20 flex-item-center bora-8 h-100" href="service-detail.html" data-cate="Multimedia Communication" data-item=""><i class="ph ph-youtube-logo fs-24"></i>
                <div class="service-name heading6 pl-12">Entertainment and Media</div></a></div>
          </div>
        </div>
      </div>
      <div class="section-case-studies section-news section-slide-shared bg-linear mt-80 pt-80 pb-80"> 
        <div class="container">
          <div class="cursor flex-center gap-12"><i class="ph ph-caret-left text-white"></i><i class="ph ph-caret-right text-white"></i></div>
          <div class="row gy-1 flex-between">
            <div class="col-xl-5 col-md-4 col-12">
              <div class="text-label text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-2 display-inline-block">Why we do</div>
              <div class="heading3 mt-12">Case studies</div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 col-12">
              <div class="body2">Case studies that showcase the agency's approach, process, and results for specific clients.</div>
            </div>
          </div>
          <div class="list-news mt-40">
            <div class="item">
                    <div class="blog-item blog-item-filter hover-box-shadow case-studies-item-main"><a class="main-item" href="case-studies-detail.html">
                        <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="assets/images/blog/398x258.png" alt="Demystifying IT Services: Exploring Tech Trends &amp; Solutions"/></div>
                        <div class="infor mt-28">
                          <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">Performance Enhancement</div>
                          <div class="title heading5 mt-12">Demystifying IT Services: Exploring Tech Trends & Solutions</div>
                          <div class="desc text-on-surface-variant1 mt-12">Enhanced performance for a manufacturing firm by optimizing their database structure, resulting in improved efficiency and competitiveness.</div>
                          <div class="date text-label text-on-surface-variant1 mt-16">September 18, 2023</div>
                        </div></a>
                    </div>
            </div>
            <div class="item">
                    <div class="blog-item blog-item-filter hover-box-shadow case-studies-item-main"><a class="main-item" href="case-studies-detail.html">
                        <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="assets/images/blog/398x258.png" alt="Unlocking Business Potential: The Role of IT Services Today"/></div>
                        <div class="infor mt-28">
                          <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">Cloud Solutions</div>
                          <div class="title heading5 mt-12">Unlocking Business Potential: The Role of IT Services Today</div>
                          <div class="desc text-on-surface-variant1 mt-12">Secured sensitive data during a financial company's cloud migration by designing a hybrid solution combining cloud flexibility and on-premises control.</div>
                          <div class="date text-label text-on-surface-variant1 mt-16">September 11, 2023</div>
                        </div></a>
                    </div>
            </div>
            <div class="item">
                    <div class="blog-item blog-item-filter hover-box-shadow case-studies-item-main"><a class="main-item" href="case-studies-detail.html">
                        <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="assets/images/blog/398x258.png" alt="Tech Insights: How IT Services Drive Modern Business"/></div>
                        <div class="infor mt-28">
                          <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">Application Development</div>
                          <div class="title heading5 mt-12">Tech Insights: How IT Services Drive Modern Business</div>
                          <div class="desc text-on-surface-variant1 mt-12">Enabled a startup to launch a successful mobile app by providing end-to-end development, leading to high downloads and recognition.</div>
                          <div class="date text-label text-on-surface-variant1 mt-16">August 20, 2023</div>
                        </div></a>
                    </div>
            </div>
            <div class="item">
                    <div class="blog-item blog-item-filter hover-box-shadow case-studies-item-main"><a class="main-item" href="case-studies-detail.html">
                        <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="assets/images/blog/398x258.png" alt="Exploring Trendy Technologies Shaping the IT Landscape"/></div>
                        <div class="infor mt-28">
                          <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">Trendy Technologies</div>
                          <div class="title heading5 mt-12">Exploring Trendy Technologies Shaping the IT Landscape</div>
                          <div class="desc text-on-surface-variant1 mt-12">Explore the trending technologies that are reshaping the IT industry, discover how they are transforming our interactions with the digital world.</div>
                          <div class="date text-label text-on-surface-variant1 mt-16">August 12, 2023</div>
                        </div></a>
                    </div>
            </div>
            <div class="item">
                    <div class="blog-item blog-item-filter hover-box-shadow case-studies-item-main"><a class="main-item" href="case-studies-detail.html">
                        <div class="bg-img w-100 overflow-hidden"><img class="w-100 h-100 display-block" src="assets/images/blog/398x258.png" alt="Unveiling Cybersecurity Best Practices for a Safer IT World"/></div>
                        <div class="infor mt-28">
                          <div class="category text-button-small text-blue pt-4 pb-4 pl-12 pr-12 bg-grey bora-8 display-inline-block">Cybersecurity</div>
                          <div class="title heading5 mt-12">Unveiling Cybersecurity Best Practices for a Safer IT World</div>
                          <div class="desc text-on-surface-variant1 mt-12">Immerse yourself in the realm of network security with leading principles to safeguard personal information and critical data.</div>
                          <div class="date text-label text-on-surface-variant1 mt-16">August 10, 2023</div>
                        </div></a>
                    </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-banner">
        <div class="list">
          <div class="heading4 text-uppercase text-white">Experience Seamless IT Solutions</div><i class="icon-icon-logo fs-36 text-white"></i>
          <div class="heading4 text-uppercase text-white">Request IT Consultation</div><i class="icon-icon-logo fs-36 text-white"></i>
          <div class="heading4 text-uppercase text-white">Experience Seamless IT Solutions</div><i class="icon-icon-logo fs-36 text-white"></i>
          <div class="heading4 text-uppercase text-white">Request IT Consultation</div><i class="icon-icon-logo fs-36 text-white"></i>
        </div>
      </div>
      <div class="section-brand bg-white pt-80 pb-80">
        <div class="container"> 
          <div class="heading5 text-center">Trusted by specialists all around the world</div>
          <div class="row mt-28 flex-center">
            <div class="col-11"> 
              <div class="row"> 
                <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/van.svg" alt="img"/></div>
                <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/slack.svg" alt="img"/></div>
                <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/pana.svg" alt="img"/></div>
                <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/shang.svg" alt="img"/></div>
                <div class="col-xl-2-4 col-md-4 col-6"><img class="w-100" src="assets/images/brand/spotify.svg" alt="img"/></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-testimonial section-testimonial-shared style-one pb-80">
        <div class="container"> 
          <div class="cursor-testimonials flex-center gap-12"><i class="ph ph-caret-left text-white"></i><i class="ph ph-caret-right text-white"></i></div>
          <div class="row flex-center"> 
            <div class="col-md-11 col-12">
              <div class="testimonial-item bg-linear list-testimonials">
                <div class="content-main">
                  <div class="star flex-item-center gap-1"><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i></div>
                  <div class="heading4 mt-24">Bytewave exceeded our expectations with their cloud computing solutions. Highly recommended!</div>
                  <div class="infor mt-16">
                    <div class="heading6">Christina Smith</div>
                    <div class="text-on-surface-variant1">CEO Digital Avitex</div>
                  </div>
                </div>
                <div class="content-main">
                  <div class="star flex-item-center gap-1"><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i></div>
                  <div class="heading4 mt-24">Their mastery of market analysis and tailored solutions drove our growth and competive advantage.</div>
                  <div class="infor mt-16">
                    <div class="heading6">Alexander Parker</div>
                    <div class="text-on-surface-variant1">Designer FPT</div>
                  </div>
                </div>
                <div class="content-main">
                  <div class="star flex-item-center gap-1"><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i><i class="ph-fill ph-star text-blue fs-20"></i></div>
                  <div class="heading4 mt-24">These consultants are true partners in success. Their thorough understanding of industry coupled.</div>
                  <div class="infor mt-16">
                    <div class="heading6">Georgina Rodriguez </div>
                    <div class="text-on-surface-variant1">CEO AliTechnology</div>
                  </div>
                </div>
              </div>
              <div class="list-avatar"> 
                <div class="bg-img active" data-name="0"><img src="assets/images/avatar/540x370.png" alt="avatar"/></div>
                <div class="bg-img" data-name="1"><img src="assets/images/avatar/540x370.png" alt="avatar"/></div>
                <div class="bg-img" data-name="2"><img src="assets/images/avatar/540x370.png" alt="avatar"/></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-contact bg-linear-grey pt-60 pb-60">
        <div class="container"> 
          <div class="row flex-between row-gap-40">
            <div class="col-12 col-xl-7 text-white">
              <div class="text-label text-white pt-4 pb-4 pl-12 pr-12 bg-blue bora-2 display-inline-block">Contact us</div>
              <div class="heading3 text-white mt-12">Free consultation - discover IT solutions for your business</div>
              <p class="desc mt-24">Unlock the full potential of your business with our free consultation. Our expert team will assess your IT needs, recommend tailored solutions, and chart a path to success. Book your consultation now and take the first step towards empowering your business with cutting-edge technology.</p>
              <div class="list-features gy-2 mt-16">
                <div class="item flex-item-center"> <i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Confirmation of appointment details</div>
                </div>
                <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Research and preparation by the IT services company</div>
                </div>
                <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Consultation to discuss technology solutions</div>
                </div>
                <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Needs assessment for tailored solutions</div>
                </div>
                <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Presentation of proposed solutions</div>
                </div>
                <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Project execution and ongoing support</div>
                </div>
                <div class="item flex-item-center mt-8"><i class="ph ph-check fs-20"></i>
                  <div class="body2 pl-12">Follow-up to evaluate effectiveness and satisfaction</div>
                </div>
              </div>
              <div class="line mt-24"></div>
              <div class="flex-item-center mt-24"><i class="ph ph-envelope fs-20"></i>
                <div class="body2 pl-12">hi.avitex@gmail.com</div>
              </div>
              <div class="flex-item-center mt-8"><i class="ph ph-phone-call fs-20"></i>
                <div class="body2 pl-12">1-333-345-6868</div>
              </div>
              <div class="flex-item-center mt-8"><i class="ph ph-map-pin fs-20"></i>
                <div class="body2 pl-12">101 E 129th St, East Chicago, IN 46312, US</div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="form-block bora-16 bg-white pt-24 pb-24 pl-28 pr-28 d-flex flex-column gap-20">
                <div class="heading5">Schedule a free consultation</div>
                <div class="row gy-2">
                  <div class="col-12 col-sm-6"> 
                    <label class="caption1 text-on-surface-variant1 pb-8" for="firstName">First Name</label>
                    <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="text" id="firstName" placeholder=""/>
                  </div>
                  <div class="col-12 col-sm-6"> 
                    <label class="caption1 text-on-surface-variant1 pb-8" for="lastName">Last Name</label>
                    <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="text" id="lastName" placeholder=""/>
                  </div>
                  <div class="col-12">
                    <label class="caption1 text-on-surface-variant1 pb-8" for="phone">Phone</label>
                    <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="number" id="phone" placeholder=""/>
                  </div>
                  <div class="col-12">
                    <label class="caption1 text-on-surface-variant1 pb-8" for="companyEmail">Company Email</label>
                    <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="email" id="companyEmail" placeholder=""/>
                  </div>
                  <div class="col-12">
                    <label class="caption1 text-on-surface-variant1 pb-8" for="company">Company/ Organization</label>
                    <input class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline" type="text" id="company" placeholder=""/>
                  </div>
                  <div class="col-12"> 
                    <label class="caption1 text-on-surface-variant1 pb-8" for="cate">How can we help you?</label>
                    <select class="w-100 bg-white pl-16 pr-24 pt-8 pb-8 bora-4 border-outline" name="form" id="cate">
                      <option value="Financial Planning">Financial Planning</option>
                      <option value="Business Planning">Business Planning</option>
                      <option value="Development Planning">Development Planning</option>
                    </select><i class="ph ph-caret-down"></i>
                  </div>
                  <div class="col-12"> 
                    <label class="caption1 text-on-surface-variant1 pb-8" for="message">Your message</label>
                    <textarea class="w-100 bg-white pl-16 pr-16 pt-8 pb-8 bora-4 border-outline display-block" name="message" rows="3" id="message" placeholder=""></textarea>
                  </div>
                </div>
                <div class="block-button">
                  <button class="button-blue button-blue-hover w-100">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
