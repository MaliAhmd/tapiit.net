<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapiit - Card</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="{{asset('tapitfavicon.png')}}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Ubuntu', sans-serif;

}
.whole{
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #292727;
}
.container{
    background: #fff;
    width: 30%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.cover{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.imglogo{
    width: 11vw;
    background-size: 100vw 100vh;
}
/* img{
        height: 205px;
        background-size: 100vw 100vh;
    } */
    .profile{
        width: 125px;
    height: 125px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    }
    .box{
        display: flex;
        justify-content: right;
        position: relative;
        padding-right: 16px;
    }
    .container2{
        margin-top: -48px;
    }
    .text{
        display: flex;
    background: #252525;
    border-radius: 100px 100px 100px 100px;
    /* padding: 31px; */
    height: 115px;
    width: 115px;
    align-items: center;
    justify-content: center;
    }
    .fsize{
        font-size: 38px;
    color: #fff;
    height: 120px;
    width: 100%;
    border-radius: 50%;

    }
    .fsizee{
        font-size: 28px;
        color: #fff;
        height: 42px;
        width: 73px;
        border-radius: 50%;

    }
    .name{
        margin-left: 10px;
        margin-top: -67px;
    }
    .ntext{
        font-size: 20px;
        font-weight: 600;
    }
    .director{
        margin-left: 10px;
    margin-top: 10px;
    }
    .dname{
        font-size: 20px;
    }
    .container3{
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to left,#8ecb86,#28a575);
        margin-left: 50px;
        margin-right: 50px;
        border-radius: 7px;
        margin-top: 50px;
    }
    .minicont{
        padding: 1vw;
    }
    .contact{
        font-size: 1.2vw;
        /* margin-bottom: 1vw; */
    }
    .about{
        margin-top: 40px;
        margin-left: 13px;
        margin-right: 13px;
    }
    .miniabout a{
        font-size: 17px;
        font-weight: 600;
    }
    .folllowtext a{
        font-size: 17px;
        font-weight: 600;
    }
    .contacttext a{
        font-size: 17px;
        font-weight: 600;
    }
    .miniabout{
        display: flex;
        flex-direction: column;
    }
    .abouttext{
        font-size: 20px;
        margin-top: 9px;
    }
    .folllowtext{
        margin-left: 13px;
        margin-top: 25px;
    }
    ul{
        display: flex;
        flex-direction: row;
        gap: 20px;
        justify-content: center;
        margin-top: 13px
    }
    li{
        list-style: none;
    }
    .imge{
        width: 2vw;
    }
    .smallscreen{
        width: 1.5vw;
        margin-top: 5px;
    }
    .contacttext{
        margin-left: 13px;
        margin-top: 13px;
    
    }
    .contlgo{
        display: flex;
        flex-direction: row;
        gap: 30px;
        justify-content: center;
        margin-top: 13px
    }
    .circle{
        border: 2px solid;
        padding: 5px;
        border-radius: 50%;
        justify-content: center;
        display: flex;
        width: 40px;
        height: 40px;
        /* display: flex; */
        /* justify-content: center; */
        align-items: center;
    }
    .circle a{
        width: 100%;
        height: 100%;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logimge{
        width: 25px;
        height: 25px;
    }
    .subcontainer4{
        margin-bottom: 1vw;
    }  
@media (max-width: 480px){
    .container{
        background: #fff;
        width: 100%;
        display: flex;
        flex-direction: column; 
    }
    img{
        background-size: 100vw 100vh;
    }
    .cover{
        /* height: 190px; */
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile{
        width: 125px;
        height: 125px;
        border-radius: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }
    .imglogo{
        width: 35vw;
    }
    .box{
        display: flex;
        justify-content: right;
        position: relative;
        padding-right: 16px;
    }
    .container2{
        margin-top: -48px;
    }
    .text{
        display: flex;
        background: #252525;
        border-radius: 100px 100px 100px 100px;
        /* padding: 31px; */
        height: 115px;
        width: 115px;
        align-items: center;
        justify-content: center;
    }
    .fsize{
        font-size: 38px;
        /* color: #fff; */
        border-radius: 50%;
        height: 117px;
        width: 117px;
    }
    .name{
        margin-left: 10px;
        margin-top: -20vw;
    }
    .ntext{
        font-size: 20px;
        font-weight: 600;
    }
    .director{
        margin-left: 10px;
    margin-top: 10px;
    }
    .dname{
        font-size: 20px;
    }
    .container3{
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to left,#8ecb86,#28a575);
        margin-left: 50px;
        margin-right: 50px;
        border-radius: 7px;
        margin-top: 0vw;
    }
    .minicont{
        padding: 5px;
    }
    .contact{
        font-size: 18px;
    }
    .about{
        margin-top: 0;
        margin-left: 13px;
        margin-right: 13px;
    }
    .miniabout a{
        font-size: 17px;
        font-weight: 600;
    }
    .folllowtext a{
        font-size: 17px;
        font-weight: 600;
    }
    .contacttext a{
        font-size: 17px;
        font-weight: 600;
    }
    .miniabout{
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }
    .abouttext{
        font-size: 15px;
        margin-top: 9px;
    }
    .folllowtext{
        margin-left: 13px;
        margin-top: 0;
    }
    ul{
        display: flex;
        flex-direction: row;
        gap: 20px;
        justify-content: center;
        margin-top: 13px
    }
    li{
        list-style: none;
    }
    .imge{
        width: 30px;
        height: 30px;
    }
    .smallscreen{
        width: 20px;
        height: 20px;
        margin-top: 5px;
    }
    .contacttext{
        margin-left: 13px;
        margin-top: 13px;
    
    }
    .contlgo{
        display: flex;
        flex-direction: row;
        gap: 30px;
        justify-content: center;
        margin-top: 13px
    }
    .circle{
        border: 2px solid;
        padding: 5px;
        border-radius: 50%;
        justify-content: center;
        display: flex;
        width: 30px;
        height: 30px;
        align-items: center;
    }
    .circle a{
        border-radius: 50%;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logimge{
               width: 100%;
        height: 100%;
        border-radius: 50%;
    }
    .subcontainer4{
        margin-bottom: 5vw;
    } 
}
    @media (max-width: 254px){
    .whole{
        background: #fff;
        overflow: hidden;
    }
   
    img{
        background-size: 100vw 100vh;
        height: 100%;
    }
    .container{
        background: #fff;
        width: 100%;
        display: flex;

    }
    .cover{
        /* height: 94px; */
        /* width: 100%; */
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .profile{
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            margin-top: -16px;
    }
    .imglogo{
        width: 38%;
        background-size: 100vw 100vh;
        
    }
    .box{
        display: flex;
        justify-content: right;
        position: relative;
        padding-right: 8px;
    }
    .nologo{
        font-size: 10px;
    }
    .container2{
        margin-top: 0
    }
    .text{
            display: flex;
            background: #252525;
            border-radius: 50%;
            /* padding: 31px; */
            height: 50px;
            width: 50px;
            align-items: center;
            justify-content: center;
    }
    .fsizee{
        font-size: 11px;
        color: #fff;
        width: 28px;
        height: 17px;
    }
    .fsize{
            font-size: 10px;
            color: #fff;
            width: 100%;
            height: 100%;
    }
    .name{
        margin-left: 10px;
        margin-top: -15vw;
    }
    .ntext{
        font-size: 5vw;
        font-weight: 600;
    }
    .director{
        margin-left: 10px;
        margin-top: -4px;
    }
    .dname{
        font-size: 5vw;
    }
    .container3{
        display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to left, #8ecb86, #28a575);
            margin-left: 40px;
            margin-right: 40px;
            border-radius: 7px;
            margin-top: 10vw !important;
    }
    .minicont{
        padding: 3vw;
    }
    .contact{
        font-size: 5vw;
    }
    .about{
        margin-top: 3vw;
        margin-left: 13px;
        margin-right: 13px;
    }
    .miniabout a{
        font-size: 5vw;
        font-weight: 600;
    }
    .folllowtext a{
        font-size: 5vw;
        font-weight: 600;
    }
    .contacttext a{
        font-size: 5vw;
        font-weight: 600;
    }
    .miniabout{
        display: flex;
        flex-direction: column;
        margin-top: 0 !important;
    }
    .abouttext{
        font-size: 5vw;
        margin-top: 2px;
    }
    .folllowtext{
        margin-top: 0vw;
    }
    ul{
        display: flex;
            flex-direction: row;
            gap: 6px;
            justify-content: center;
            margin-top: 0px;
    }
    li{
        list-style: none;
    }
    .imge{
        width: 15px;
        height: 15px;
        margin-top: 2px;
    }
    .smallscreen{
        width: 11px;
        height: 11px;
        margin-top: 0;
    }
    .contacttext{
        margin-left: 13px;
        margin-top: 2px;
    
    }
    .contlgo{
        display: flex;
            flex-direction: row;
            gap: 12px;
            justify-content: center;
            margin-top: 6px;
    }
    .circle{
            border: 2px solid;
            padding: 3px;
            border-radius: 50%;
            justify-content: center;
            display: flex;
            width: 20px;
            height: 20px;
        }
    .logimge{
        width: 10px;
        height: 10px;
    }
    }
    @media (max-width: 180px){
        .folllowtext{
            margin-top: 3px !important;
    }

    .container3 {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to left, #8ecb86, #28a575);
        margin-left: 40px;
        margin-right: 40px;
        border-radius: 7px;
        margin-top: 5vw !important;
    }
    .about {
        margin-top: 4px !important;
        margin-left: 13px;
        margin-right: 13px;
    }

    }

    

    </style>
</head>
<body>

    <div class="whole"> 
    <div class="container">
        <div class="sub_contianer1">
        <div class="cover">
        @if ($user->img == null)
            <img class="profilee" style="width: 100%;" src="https://images.pexels.com/photos/302769/pexels-photo-302769.jpeg?cs=srgb&dl=pexels-pixabay-302769.jpg&fm=jpg" alt="User Picture">
            @else
            <img loading="lazy" class="imglogo" src="{{ asset('./uploads/users/'.$user->img) }}" alt="">
            @endif
        </div>
        <div class="container2">
            <div class="box">
                <div class="profile">
                    <div class="text">
                        @if ($user->logo == null)
                        <!-- <img class="fsize" src="{{ asset('./uploads/users/'.$user->logo) }}" alt=""> -->
                        <a class="fsizee">Tapiit</a>
                        
                @else
                        <img class="fsize" src="{{ asset('./uploads/users/'.$user->logo) }}" alt="">
                        @endif
                    </div>
                
            </div>    
        </div>
        <div class="nameee">
        <div class="name">
        @if ($user->name != null)
            <a class="ntext">
            {{$user->name}}
        </a>
        @endif
        </div>
        </div>
        @if ($user->designation == null)
        <div class="director">
            <a class="dname">Enter your Designation</a>
        </div>
        @else
        <div class="director">
            <a class="dname">{{$user->designation}}</a>
        </div>
        @endif
    </div>
    </div>
    <div class="sub_container2">
    <div class="container3">
        <div class="minicont">
        @if ($user->contact == null)
        <p id="downloadContact" class="contact">Enter Contact Details</p>
        @else
            <p id="downloadContact" class="contact">Add to Contact</p>
            @endif
        </div>
    </div>
    <div class="about">
        <div class="miniabout">
        <a>About Us</a>
        @if ($user->description == null)
        <p class="abouttext">Nill</p>
        @else
        <p class="abouttext" >
        {{ $user->description }}
        </p>
        @endif
    </div>
    </div>
    </div>
    <div class="subcontainer3">
    <div class="socials">
        <div class="folllowtext">
            <a>Follow My Socials</a>
        </div>
        <div class="logo">
            <ul>
                
            @if ($user->fb != null)
                    <li><a  href="{{ Str::startsWith($user->fb, 'www.') ? 'https://' . substr($user->fb, 4) : $user->fb }}">
                            <img class="smallscreen" class="imge" src="{{ asset('5ffb.png') }}" alt="">
                    </a></li>
                    @else
                   

            @endif
            @if ($user->insta != null)
            <li>
                    <a href="{{ Str::startsWith($user->insta, 'www.') ? 'https://' . substr($user->insta, 4) : $user->insta }}"><img class="imge" src="{{asset('5insta.png')}}" alt="">
                </a>
            </li>
                @endif
                
                @if ($user->tiktok != null)
                <li><a href="{{ Str::startsWith($user->tiktok, 'www.') ? 'https://' . substr($user->tiktok, 4) : $user->tiktok }}"><img class="imge" src="{{asset('5tiktok.png')}}" alt=""></a></li>
                @endif
                @if ($user->youtube != null)
                <li><a href="{{ Str::startsWith($user->youtube, 'www.') ? 'https://' . substr($user->youtube, 4) : $user->youtube }}"><img class="imge" src="{{asset('5youtube.png')}}" alt=""></a></li>
                @endif
                @if ($user->fb == null && $user->insta == null && $user->tiktok == null && $user->youtube == null)
                    <li>
                        <p class="nologo">Add socials   links</p>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    </div>
    <div class="subcontainer4">
    <div class="contact">
        <div class="contacttext">
            <a>Contact Me</a>
        </div>
        <div class="contactlogo">
            <ul class="contlgo">
                <li>
                @if ($user->website==null)
                <!-- <div class="circle">
                        <img class="logimge" src="{{asset('5global.png')}}" alt="">  
                    </div> -->
                    @else
                    <div class="circle">
                    <a href="{{ Str::startsWith($user->website, 'www.') ? 'https://' . substr($user->website, 4) : $user->website }}">
                        <img class="logimge" src="{{asset('5global.png')}}" alt="">
                        </a>
                    </div>
                    @endif
                </li>
                <li>
                @if ($user->email==null)
                    <!-- <div class="circle">
                        <img class="logimge" src="{{asset('5mail.png')}}" alt="">
                    </div> -->
                    @else
                    <div class="circle">
                    <a href="mailto:{{ $user->email }}">
                        <img class="logimge" src="{{asset('5mail.png')}}" alt="">
                    </a>
                    </div>
                    @endif
                </li>
                
                <li>
                @if ($user->location==null)
                <!-- <div class="circle">
                <img class="logimge" src="{{asset('5location.png')}}" alt="">
               
                    </div> -->
                @else
                <div class="circle">
                <a href="{{ $user->location }}" target="_blank"><img class="logimge" src="{{asset('5location.png')}}" alt="">
                </a>
                    </div>
                @endif
                </li>
                <li>
                @if ($user->contact==null)
                <!-- <div class="circle">
                    <img class="logimge" src="{{asset('5whatsapp.png')}}" alt="">
                    </div> -->
                    @else
                    <div class="circle">
                    <a href="https://wa.me/{{ $user->contact }}" target="_blank"><img class="logimge" src="{{asset('5whatsapp.png')}}" alt="">
                    </a>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    </div>
</div>
</div>
<script>
    document.getElementById('downloadContact').addEventListener('click', function() {
            var fullname = "{{$user->name}}"; 
            var companyName = "{{$user->company}}"; 
            var contactData = {
                fullName: fullname,
                firstName: fullname.split(' ')[0], 
                lastName: fullname.split(' ').slice(1).join(' '), 
                phoneNumber: "{{$user->contact}}", 
                country: "{{$user->country}}", 
                city: "{{$user->city}}", 
                address: "{{$user->address}}", 
                website: "{{$user->website}}"
            };

            
            var vCard =
                'BEGIN:VCARD\n' +
                'VERSION:3.0\n' +
                'FN:' + contactData.fullName + '\n' + // Full name
                'N:' + contactData.lastName + ';' + contactData.firstName + ';;;\n' + // Structured name
                'ORG:' + companyName + '\n' + // Organization
                'TEL;TYPE=CELL:' + contactData.phoneNumber + '\n' + // Phone number
                'ADR;TYPE=WORK:;;' + contactData.address + ';' + contactData.city + ';;' + contactData.country + '\n' + // Address
                'URL:' + contactData.website + '\n' + // Website
                'END:VCARD';

            // Create a blob with the vCard data and type
            var blob = new Blob([vCard], {
                type: 'text/vcard'
            });

            // Create a hidden download link
            var link = document.createElement('a');
            link.href = window.URL.createObjectURL(blob);
            link.download = 'contact.vcf'; // Setting the download file name
            link.style.display = 'none'; // Hiding the link

            // Append the link to the body, trigger the download, then remove the link
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
</script>
</body>
</html>