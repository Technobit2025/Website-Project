@extends('layouts.simple.master')

@section('title', 'Hide Nav Scroll')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Hide Menu On Scroll</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}"> <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Page Layout</li>
                        <li class="breadcrumb-item active">Hide Menu On Scroll</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sample Card</h5>
                        <p class="f-m-light mt-1">A sample card of the cuba theme.</p>
                    </div>
                    <div class="card-body">
                        <p> A qualified expert who is in charge of developing and designing websites is
                            known as a web designer. They make advantage of their knowledge of current web
                            design trends to create websites that are both aesthetically pleasing and
                            user-friendly. Making sure that the websites they develop are responsive—that
                            is, that they easily adjust to multiple screen sizes and devices—is a crucial
                            component of their work. This guarantees that users, regardless of the device
                            they are using, can access and navigate the website efficiently.</p>
                        <p>A web designer is technically proficient as well as having a good sense of
                            aesthetics and colour. They take care to choose colour palettes that go with the
                            corporate identity and deliver the intended message. The website's efficacy and
                            overall user experience can be significantly impacted by the colour scheme. A
                            web designer can develop a visually appealing website that grabs visitors'
                            attention and improves their surfing experience by adding the right color
                            choices.</p>
                        <p>Web designers use CSS as a crucial tool to realise their creative ambitions. The
                            layout, appearance, and style of web pages are managed using this language. To
                            maintain uniformity and coherence throughout the website, a web designer's CSS
                            knowledge is essential. Every component of the website may be altered with CSS,
                            from typefaces and spacing to picture and button placement. By leveraging CSS, a
                            web designer is able to create a visually stunning website that aligns with the
                            client's objectives and enhances the user's interaction with the site.</p>
                        <p>A web designer not only concentrates on producing websites that are aesthetically
                            pleasing but also pays great attention to the appropriate use of colour. They
                            are aware of the psychology underlying colour and how it might influence people'
                            feelings and behaviours. A web designer may create a unified and aesthetically
                            pleasant experience for visitors by carefully selecting colour schemes that
                            complement the brand and message of the website.</p>
                        <p>A practitioner with expertise in building attractive and useful websites is known
                            as a web designer. Their primary objective is to create responsive websites,
                            which can adjust to and show properly on various platforms including PCs,
                            tablets, and mobile phones. A web designer gives considerable thought to a
                            website's style, navigation, and general user experience to make sure the target
                            audience will find it easy to use and visually appealing.</p>
                        <p>Knowledge of user psychology, design concepts, and usability testing techniques
                            are essential for UX designers. Additionally, they must possess strong
                            communication skills with both technical and user stakeholders.training and
                            education The educational road to become a UX designer is not one-size-fits-all.
                            The majority of UX designers, however, have degrees in design, computer science,
                            or human-computer interaction. Additionally, there are several UX design courses
                            and bootcamps that are offered both online and in person.Career prospects: Job
                            prospects for UX designers are excellent. UX designers' employment is expected
                            to increase by 13% between 2020 and 2030, according to the Bureau of Labour
                            Statistics, which is substantially faster than the average for all
                            occupations.Making a product or service functional, pleasurable, and accessible
                            is the responsibility of the UX designer. Although many businesses create user
                            experiences, the phrase is frequently connected to digital design for websites
                            and mobile applications. The broad design phases tend to remain the same, even
                            though the actual process changes from product to product and firm to company.
                        </p>
                        <p>Make sure that every element type has the same style. Make every heading have the
                            same style. Make every body paragraph have the same style. Make every list
                            appear uniform in style. Maintaining consistency pays off, particularly in
                            documents with a lot of content.</p>
                        <p> For digital products to be successful, web designers and UX designers must
                            collaborate well. To make sure that the visual design complements the user
                            experience objectives, they have to communicate on a frequent basis. While UX
                            designers rely on web designers to visually appealingly translate their research
                            into designs, web designers may rely on UX designers for insights into user
                            behavior.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/hide-on-scroll.js') }}"></script>
@endsection
