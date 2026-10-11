@include('frontend.go_solar.head')

<main>
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero__image" aria-hidden="true"></div>
        <div class="container position-relative hero__content">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-7 col-xl-6">
                    <img class="brand-logo" src="{{ asset('frontend/assets/images/logo.png') }}" alt="Sky Solar Renewable Energy Solutions Private Limited">
                    <p class="eyebrow">Powering a cleaner, greener tomorrow</p>
                    <h1 id="hero-title">Switch to <span>Clean &amp; Affordable</span> Solar Energy</h1>
                    <p class="hero__lead">Save on Electricity Bills <b>·</b> Increase Property Value <b>·</b> Support a Greener Tomorrow</p>
                    <div class="hero-points">
                        <div><span>▣</span><strong>Lower</strong><small>Electricity Bills</small></div>
                        <div><span>⌂</span><strong>Government</strong><small>Subsidy Support</small></div>
                        <div><span>✓</span><strong>25 Years</strong><small>Warranty</small></div>
                        <div><span>●</span><strong>Clean &amp; Green</strong><small>Environment</small></div>
                    </div>
                    @include('frontend.includes.solar_cta')
                </div>
            </div>
        </div>
        <div class="scheme-pill">PM Surya Ghar<br>Muft Bijli Yojana<br>Support</div>
    </section>

    <section class="section section--solutions" aria-labelledby="solutions-title">
        <div class="container">
            <div class="section-heading"><p class="eyebrow">Solutions for every roof</p><h2 id="solutions-title">Our Solar <span>Solutions</span></h2><p>Customized solar systems for homes, businesses and industries.</p></div>
            <div class="row g-4">
                <div class="col-md-4"><article class="solution-card"><img src="{{ asset('frontend/assets/images/slider/slider2.jpg') }}" alt="Modern home fitted with rooftop solar panels"><div><span class="card-icon">⌂</span><h3>Residential Solar</h3><p>Save electricity bills and power your home with clean energy.</p></div></article></div>
                <div class="col-md-4"><article class="solution-card"><img src="{{ asset('frontend/assets/images/resource/service2.png') }}" alt="Commercial solar panel installation"><div><span class="card-icon">▦</span><h3>Commercial Solar</h3><p>Reduce operational costs and improve energy efficiency.</p></div></article></div>
                <div class="col-md-4"><article class="solution-card"><img src="{{ asset('frontend/assets/images/resource/service3.png') }}" alt="Industrial rooftop solar panel installation"><div><span class="card-icon">▥</span><h3>Industrial Solar</h3><p>Reliable solar solutions for long-term business growth.</p></div></article></div>
            </div>
            @include('frontend.includes.solar_cta')
        </div>
    </section>

    <section class="section section--dark" aria-labelledby="choose-title">
        <div class="container">
            <div class="section-heading section-heading--light text-center"><p class="eyebrow">Built around your peace of mind</p><h2 id="choose-title">Why Choose <span>Sky Solar?</span></h2><p>Reliable. Affordable. Sustainable.</p></div>
            <div class="feature-grid">
                @foreach ([['★','High Quality Products','Trusted & certified solar components'],['₹','Cost Savings','Reduce electricity bills significantly'],['✓','25 Years Warranty','Long-term peace of mind'],['⌂','Government Scheme Support','PM Surya Ghar assistance'],['₹','Personalized Loan Assistance','Easy financing options'],['◉','Friendly Support','Dedicated team with quick service']] as [$icon, $title, $copy])
                    <article class="feature-card"><span>{{ $icon }}</span><h3>{{ $title }}</h3><p>{{ $copy }}</p></article>
                @endforeach
            </div>
            @include('frontend.includes.solar_cta')
        </div>
    </section>

    <section class="section section--process" aria-labelledby="process-title">
        <div class="container">
            <div class="section-heading"><p class="eyebrow">Clear from day one</p><h2 id="process-title">Our Simple <span>Process</span></h2><p>From enquiry to installation, we make it easy for you.</p></div>
            <div class="process-grid">
                @foreach ([['1','✎','Enquiry','Share your details with us'],['2','⌂','Free Site Survey','Our team will assess your site'],['3','▤','Custom Proposal','Get the best system design & quotation'],['4','⚙','Installation','Professional and hassle-free installation'],['5','◉','Support','Ongoing service and maintenance']] as [$number, $icon, $title, $copy])
                    <article class="process-card"><b>{{ $number }}</b><span>{{ $icon }}</span><h3>{{ $title }}</h3><p>{{ $copy }}</p></article>
                @endforeach
            </div>
            @include('frontend.includes.solar_cta')
        </div>
    </section>

    <section class="section section--benefits" aria-labelledby="benefits-title">
        <div class="container">
            <div class="section-heading"><p class="eyebrow">Energy that pays you back</p><h2 id="benefits-title">Benefits of <span>Going Solar</span></h2><p>A smarter choice for today and a brighter tomorrow.</p></div>
            <div class="row g-4">
                @foreach ([['●','Environmental Benefits','Clean energy for a greener and healthier future'],['₹','Financial Benefits','Lower electricity bills and long-term savings'],['⌂','Property Value','Increase the value of your property']] as [$icon, $title, $copy])
                    <div class="col-md-4"><article class="benefit-card"><span>{{ $icon }}</span><div><h3>{{ $title }}</h3><p>{{ $copy }}</p></div></article></div>
                @endforeach
            </div>
            @include('frontend.includes.solar_cta')
        </div>
    </section>

    <section class="final-strip" aria-labelledby="final-title">
        <div class="container">
            <div class="section-heading section-heading--light text-center"><h2 id="final-title">Powering a <span>Cleaner, Greener Tomorrow</span></h2><p>Join the renewable energy movement with Sky Solar.</p></div>
            <div class="trust-grid">
                <div><span>●</span><p><strong>Clean Energy</strong><small>Reduce carbon footprint</small></p></div>
                <div><span>☀</span><p><strong>Reliable Power</strong><small>Uninterrupted energy supply</small></p></div>
                <div><span>♟</span><p><strong>Experienced Team</strong><small>Professional installation & support</small></p></div>
                <div><span>✓</span><p><strong>Long-term Investment</strong><small>25 Years Warranty</small></p></div>
            </div>
            @include('frontend.includes.solar_cta')
        </div>
    </section>
</main>

@include('frontend.go_solar.foot')
