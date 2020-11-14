<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card1 {
        display: grid;
        grid-template-columns: 290px;
        grid-template-rows: 210px 210px 80px;
        grid-template-areas: "image" "text";
        border-radius: 18px;
        background: white;
        box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
        font-family: roboto;
        text-align: center;
        transition: 0.5s ease;
        cursor: pointer;
        margin:30px;
      }
      .card1-image {
        grid-area: image;
        background: url(assets/img/img1.jpg);
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        background-size: cover;
      }

      .card1-text {
        grid-area: text;
        margin: 25px;
        overflow: auto;
        height: 120%
      }
      .card1-text p {
        color: grey;
        font-size:15px;
        font-weight: 300;
        height: 100%
      }
      .card1-text h2 {
        margin-top:0px;
        font-size:18px;
      }

      .card1:hover {
        transform: scale(1.15);
        box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
      }

      .card1-image.card12 {
        background: url("https://miro.medium.com/max/2800/0*4wMrvjNRA9kcVvks");
        background-size: cover;
      }
      .card1-text.card12 .date {
        color: rgb(255, 77, 7);
      }


      .card1-image.card13 {
        background: url("https://www.cantercadd.com/cadd-courses/civilcadd1.jpg");
        background-size: cover;
      }
      .card1-text.card13 .date {
        color: rgb(0, 189, 63);
      }
      .card1-image.card14 {
        background: url("https://www.tacoma.uw.edu/sites/default/files/styles/node_gallery_display/public/node_gallery/HomeCSS.png?itok=dTnNbY9z");
        background-size: cover;
      }
      .card1-text.card14 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card15 {
        background: url("https://mindlercareerlibrarynew.imgix.net/1G-Computer_ScienceCsIT_Software_Engineering.png");
        background-size: cover;
      }
      .card1-text.card15 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card16 {
        background: url("https://tryengineering.org/wp-content/uploads/bigstock-Electronics-3146661.jpg");
        background-size: cover;
      }
      .card1-text.card16 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card17 {
        background: url("https://i.pinimg.com/originals/7d/71/f5/7d71f5e78c4d883fdf48b5c89bc61adc.jpg");
        background-size: cover;
      }
      .card1-text.card17 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card18 {
        background: url("https://admin.workforce.com/wp-content/uploads/sites/2/2018/12/AI-is-coming-%E2%80%94-and-HR-is-not-prepared.jpg");
        background-size: cover;
      }
      .card1-text.card18 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card19 {
        background: url(https://media-exp1.licdn.com/dms/image/C4E1BAQGpoD6OAi9CCA/company-background_10000/0?e=2159024400&v=beta&t=jUZF0tEI9S_IBNay-BX3zPlvFP2DHdp9UNDqgaBdjXQ);
        background-size: cover;
      }
      .card1-text.card19 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card20 {
        background: url("https://www.usnews.com/dims4/USNEWS/0be1944/2147483647/thumbnail/640x420/quality/85/?url=http%3A%2F%2Fmedia.beam.usnews.com%2F07%2F00354c85a0a99b4abfd67d48bd3e4c%2Fjobs-job-photo-101.jpg");
        background-size: cover;
      }
      .card1-text.card20 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card21 {
        background: url("https://www.indiaeducation.net/imagesvr_ce/5225/textile.jpg");
        background-size: cover;
      }
      .card1-text.card21 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card22 {
        background: url("https://www.scottengineering.com/masonry/resources/site-w640.jpg");
        background-size: cover;
      }
      .card1-text.card22 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card23 {
        background: url(assets/img/img3.jpg);
        background-size: cover;
      }
      .card1-text.card23 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card24 {
        background: url(assets/img/img3.jpg);
        background-size: cover;
      }
      .card1-text.card24 .date {
        color: rgb(0, 189, 63);
      }.card1-image.card25 {
        background: url(assets/img/img3.jpg);
        background-size: cover;
      }
      .card1-text.card25 .date {
        color: rgb(0, 189, 63);
      }
    </style>
  </head>
  <body style = "background:#BCDBF0;">
    <?php
      include "components/common/navbar.php";
    ?>
<div class="container">
  <div class="row" >
    <div class="col-md-4">
      <div class="card1">
      <div class="card1-image"></div>
      <div class="card1-text">
        <h2>Department Of Architecture</h2>
        <hr/>
        <p>The plan of study of the Dept. of Architecture was established 1988 and provides an introduction in to the discipline of design and physical planning in response to human needs, cultural values and technological concerns. The students explore graphics in the state of art computer labs equipped with software like AutoCAD 2005, 3d max6 Draw12, Photoshop7 etc and display their works in the well equipped studios and pore through an extensive col-md-4lection of magazines, journals. Facilities like modern scanners copiers, CAD tools and complete photography lab are with in the reach of the students. They work closely with a faculty specializing in urban design, landscape architecture, city planning, architectural conservation etc. In the past few years the dept has organized major events like the national association of student of architecture (NASA), Zonal NASA conventions and a Kodak sponsored workshop on the Architecture Photography. Renowned architects of national repute and distinguished professors among the leading technical institutes, such as IIT, SPA, New Delhi visit the dept regularly to attend seminars and conduct workshop. The students forum of the dept takes active participation in the celebrating events like World Photography Day, World Habitat Day, Earth Day etc. It also exclusively maintains a frequently changing exhibits section. This Department offer M.Arch. course.</p>
      </div>
     
    </div>
    </div>
    <div class="col-md-4">
       <div class="card1">
      <div class="card1-image card12"></div>
      <div class="card1-text card12">
        <h2>Department Of Biotechnology</h2>
        <hr/>
        <p>The Biotechnology Department was established in 2007 with student intake of 30 for B Tech degree programme under self sustain mode. Later on M Tech degree programme started in the academic session 2013-14 as a regular programme with intake of 18.

Presently there are 8 teaching faculty members in the Department in various specialisations like Protein Engineering, Pharmaceutical Biotechnology Industrial microbiology, Bioprocess Engineering, Environmental Engineering, Bioinformatics and Animal Biotechnology.

The academic performance of the B Tech students in the University Exams is very much satisfactory. The placement percentage for the students in last five years is also encouraging. The Department is actively engaged in a good number of consultancy jobs like structural vetting and material testing for the consultants in our laboratory.

In last five years, the faculty members have published a good no of papers in national and international journals.

The Department organises workshops and seminars every year for the interest of students and faculty of this Department. The Annual Technical Bulletin named ‘ESSENCE’ is published every year by this department with a view to provide the faculty and students a platform to show their talents and innovative ideas. The department also organises study visits for the students to the industries and national institutes. Also advance training programmes are arranged for the benefit of students inviting Professors from IITs/NITs and professional field experts under aegis of TEQIP.</p>
      </div>
    
    </div>
    </div>
    <div class="col-md-4">
      <div class="card1">
        <div class="card1-image card13"></div>
        <div class="card1-text card13">
         
          <h2>Department Of Civil Engineering</h2>
          <hr/>
          <p>The Department was established in 1981 with the inception of the col-md-4lege. The Department boasts of a faculty that specializes in the fields of structure engineering, earthquake engineering, facture mechanics, hydrology, water resources, foundation engineering, transportation engineering, construction management, entrepreneurship and environmental engineering. The labs are fully equipped to enhance the knowledge of the student, periodic field trips and visits to various project sites are arranged. Special lectures and seminars are held on a frequent basis to help them tailor in their particular areas of interest. The department maintains the environmental citizenship cell of the col-md-4lege and distributes work on the government funded projects among its student. The department also undertakes consultancy work and martial testing in its well equipped labs for various organizations. This Department offer M.Tech. in Structural Engineering with effect from 2005. 	
			</p>
        </div>
    </div>
    </div>
<div class="col-md-4">
     <div class="card1">
        <div class="card1-image card14"></div>
        <div class="card1-text card14">
         
          <h2>Department Of Computer Science & Application (MCA)</h2>
          <hr/>
          <p>Department of Computer Science and Application was established in the year 1993, in col-md-4lege of Engineering and Technology, OUAT. The PGDCA program, under the department of Electrical Engineering from 1989 to 1992 was transformed into the MCA program and was bought under the CSA department. With an initial strength of 30 students, the department started in the year 1993. In the year 2002, col-md-4lege of Engineering and Technology was transferred from Orissa University of Agriculture and Technology (OUAT) to Biju Patnaik University of Technology (BPUT). In the past 22 years, the department has developed manifold to join the club of elite departments in the state. The very fact that only the top rankers of the OJEE are eligible to study in this department speaks tons about the importance of the department in the state educational scenario.

The department is committed to provide best quality knowledge in a lucid and less tiresome ways. The alumni of the department include software developers, bankers, academicians, entrepreneurs, and people from various other fields. The placement record of this department bears the testimony of its dedication and determination.	
			</p>
        </div>
    </div>
    </div>
    <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card15"></div>
        <div class="card1-text card15">
         
          <h2>Department Of Computer Science & Engineering</h2>
          <hr/>
          <p>The Department of Computer Science & Engineering since its introduction in 2001 has taken several steps towards development and come a long way in establishing itself a department which commands both respect and importance. It is equipped with sophisticated laboratories and well qualified faculties who are not only technically skilled but also professionally competent. Faculty members have obtained recognition through publication at the national and international level in the areas of neural networks, pattern recognition and image processing etc. The chief co-ordinator has undertaken the AICTE project on MODROB, Govt. Teacher’s training program for Dept. of Higher Education. Govt. of Odisha. Apart from classroom teaching, students are made adept in the sessional at the digital logic design lab, microprocessor lab, computer network and internet lab. The students have a 12-hour guide access to the Internet lab and are given a free hand in using the services of printers and scanners. The department also conducts seminars on a regular basis which helps the students in keeping pace with recent developments in the field of information science. The students of this department have undertaken project assignments in developing software for col-md-4lege timetable, student attendance registers, library information system which helps them to gain practical knowledge in real world problem. This Department offer M.Tech. in Computer Science & Engineering since 2005-06 academic session. Under TEQIP full time regular Ph.D. students are working. Alumnis are well established throughout the globe.	
			</p>
        </div>
    </div>
    </div>
 
        <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card16"></div>
        <div class="card1-text card16">
         
          <h2>Department Of Electrical Engineering</h2>
          <hr/>
          <p>The Department of Electrical Engineering was started in the year 1982. The department focuses on utilizing its unbound resources to craft creative solutions to real world problem. The students are updated on the cutting edge technologies motivated by the faculty to pursue higher education. Our students have extended their brilliant academic record in various institutions of higher learning like IISC, IITs, IIMs etc. Software engineering is minutely interwoven in the curriculum with the students working in the CAD/CAM/CAE as well as C, C++, VB. The students of electrical engg undertake project work focused on latest development in core and associated electrical domain such as electric drives, static controllers, power system operation and control, VAR compensation, optimization technique applied to electrical system, CAD/CAM, telecommunication network, microprocessor and microcontroller based system, PLC based system, Instrumentation & measurement based system, VLSI & embedded system and some software related field. Students show their creative and innovative idea in laboratory and project work beyond the specified syllabus. The students are exposed to industrial environment during their summer training after 2nd and 3rd year in various reputed organizations like Rourkela Steel plant, National Aluminum Company, Hindalco, NTPC, TTPS, Gridco and many more. Students participate in various national level techno cultural activities and bring laurels for the institution as well as for the department. Techno cultural activities are organized by the Electrical Engg. Student Society (EESS) in the name of ‘URZAA’ annually with the active support & guidance of faculty members of the department.. The faculty members participate in Govt. sponsored project work in the field of Electrical Engg. The dept. of electrical engg is striving hard to impact quality teaching so as to make the students confident enough in shouldering their duties and responsibilities as power engineer in binding the nation.
			</p>
        </div>
    </div>
    </div>

 <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card17"></div>
        <div class="card1-text card17">
         
          <h2>Department Of Fashion and Apparel Technology</h2>
          <hr/>
          <p> 	College of Engineering & Technology (CET), one of the leading Technical institution of Eastern Part of India have a reputation of producing world-class engineers. Looking at the enormous potential of Garment & Fashion Designing in the present century, CET has well planned in this race by adding a new dimension by introducing B. Tech course in Fashion Technology in to its credit with a vision to exploit and expose the creativity of young talented Fashion Technocrats in the globe. The unique Traditional designs of Garments & Lifestyle of India have been greatly appreciated globally. In this context Fashion Designers have a great role to play. Department of fashion Technology is one of the leading department of college of engineering and Technology. The design of the course structure aims at producing highly trained professionals, who will have the right expertise to guide the garment industry for using high technology and better designing skills, consistency in product quality, price and services, which have a great bearing on importers as well as home markets. Also the constant interaction with the garment industry instills in the students, the confidence in their own ability to keep up with the competitive industrial world.	
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card18"></div>
        <div class="card1-text card18">
         
          <h2>Department Of Information Technology</h2>
          <hr/>
          <p> 	
Vision<br/>
To establish the Department for attaining technical excellence nationwide in the field of Information Technology

Mission<br/>
To groom the students to be technically competent and skilled intellectual IT professionals.
To impart value-based education and enrich the knowledge of students in the field of information technology.
To provide a platform to students for effective interaction with industry and research community with new challenges.
 
Programme Educational Objectives (PEOs)<br/>
PEO 1:	
To create a suitable academic environment that promotes innovation and excellence through the adoption of modern teaching methods and fair practice.

PEO 2:	
To motivate the students to pursue diversified career options applying the knowledge perceived.

PEO 3:	
To inculcate effective problem solving skills and teamwork spirit in students so as to create a healthy work environment.

Program Outcomes (POs)
PO 1:	To provide students with core competence in mathematics, science and basic engineering fundamentals necessary to formulate, analyze and solve engineering problems.
PO 2:	To train students in core areas of Information Technology to comprehend engineering tradeoffs, analyze, design, and synthesize data and technical concepts to create novel products and solutions for the real life problems.
PO 3:	To inculcate in students effective oral and written communication skills.
PO 4:	To identify, formulate, and solve hardware and software computing problems.
PO 5:	To apply knowledge of computing and communication in the domain of Information Technology.
PO 6:	To design, implement and evaluate IT based system, to meet the need of industry and society.
PO 7:	To effectively integrate IT based solution into the user environment.
PO 8:	To work individually or as a member with responsibility to function on multidisciplinary teams.
PO 9:	To understand professional, legal, and ethical issues and responsibilities.
PO 10:	To demonstrate an ability to acquire new knowledge in the computing discipline and to engage in lifelong learning.
PO 11:	To apply engineering and management knowledge and techniques to estimate time and resources needed to complete a computer engineering project.
PO 11:	To recognize the importance of professional development by pursuing postgraduate studies or face competitive examinations that offer challenging and rewarding careers in computing.
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card19"></div>
        <div class="card1-text card19">
         
          <a href="instrumentation.php"><h2>Department Of Instrumentation & Electronics Engineering</h2></a>
          <hr/>
          <p>The Department of Instrumentation and Electronics Engineering was established in 1992. It is equipped with sophisticated laboratories and well qualified faculty. The students are made adept in the sessional at the microprocessors and pc lab, process control and instrumentation and device lab. These labs provide facilities for microprocessors and computer based temperature, pressure, flow and level. Control Engg. Lab adds to the further expertise in electrical, mechanical and electromechanical application based experiments. The dept. also possesses an in house computer hardware lab& PC lab. It has many 8bit/12bit/32bit processor based computer that are connected in the both Linux and Windows NT operating system environment. Other software package like PSPICE, MATLAB, VISUAL STUDIO, JAVA etc. are used for computer aided projects. These help the student in keeping pace with the recent developments in the field of information since and engg. And at the same time enhancing and strengthening their knowledge by designing packages required to solve real life problem. The faculty specializes in the field of process control & instrumentation, telecommunication engg. Digital system, automation engineering, biomedical instrumentation, artificial intelligence, microelectronics, electronic communication system etc.
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card20"></div>
        <div class="card1-text card20">
         
          <h2>Department Of Mechanical Engineering</h2>
          <hr/>
          <p>The Department of Mechanical Engineering is one of the earliest department established in 1981 . It has faculty specialized in the field of machine design and dynamics, production engg.,industrial engineering & management, thermal engg. The Mechanical Lab is equipped with FFT analyzers, vibration and acoustic instrument from diagnostic instruments (UK). CAD/CAM lab has HP workstations, Core2Duo based computers, laser printers and scanners, software both for designing and programming like NISA, ANYSYS, MASTERCAM, AutoCAD2005, Tk Solver, MATLAB, CAFIMS. The mechanical lab has also facilitates in different domains like heat transfer, heat power, refrigeration & air conditioning, Hydraulic machines, IC engines, Machine dynamics and material testing etc. Mechanical workshop has various types of lathes (HMT, NC, CNC), Milling (HMT), Drilling, shaping, grinding machines, etc. Flexible manufacturing labs in corporated CNC systems, Robot and Machine vision system. The welding shop consists of gas welding, arc welding and TIG & MIG welding equipments. The material testing lab is equipped with universal testing machine, hardness testing machine, etc. The department has carried out number of AICTE funded projects.
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card21"></div>
        <div class="card1-text card21">
         
          <h2>Department Of Textile Engineering</h2>
          <hr/>
          <p> 	
Vision<br/>
To become a nationally acclaimed department for providing quality technical education in textile engineering and chemical processing.

Mission<br/>
To provide excellent technical education in textile engineering and chemical processing.
To provide relevant industrial exposure and placement to our students.
To develop attitude, skill and ethical values in students, that will enable them to meet socio economic challenges.
 
Programme Educational Objectives (PEOs)
PEO 1:	To produce human resources having technical competencies so that they can excel in professional career and/or higher education by acquiring knowledge and skill in design, analysis, mathematical computing and engineering principles.
PEO 2:	
To acquaint the students with real life problems through internship, collaborative programmes with industry, project works etc. so as to enable them to innovate programmatic, creative and economic solutions for real life problems in professional carriers.
PEO 3:	To produce graduates, who are flexible and adaptable in the workplace and to possess the capacity to embrace new opportunities of emerging technologies, and embrace leadership and all affording sustainable engineering careers.
PEO 4:	
To enable students to exhibit professionalism, ethical attitude, communication skills, team work in their profession and adapt to current trends by engaging in lifelong learning.
Program Outcomes (POs)
 
PO 1:	An ability to apply knowledge of mathematics, science, and engineering;
PO 2:	An ability to design and conduct experiments, as well as to analyze and interpret data using techniques, hardware and software tools for modern engineering applications;
PO 3:	An ability to design a system, component, or process to meet desired needs;
PO 4:	An ability to function in multi-disciplinary teams;
PO 5:	An ability to identify, formulate, and solve Textile engineering problems;
PO 6:	An ability to use the techniques, skills, and modern engineering tools necessary for textile engineering practice.
PO 7:	An ability to communicate effectively;
PO 8:	An ability in applying the communicative language skills and professional knowledge to earn job opportunities in leading textile organizations.
PO 9:	An ability to recognize the need for and an ability to do research and to engage in life-long learning;
PO 10:	An ability in learning professional, managerial, ethical and environmental based principles to become good citizen of our nation.
PO 11:	An ability to understand the impact of engineering solutions in a global and societal context.	
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card22"></div>
        <div class="card1-text card22">
         
          <h2>Department Of Planning</h2>
          <hr/>
          <p>T 	The B.Plan and M.Plan courses started in the academic year 2015-16 to facilitate the future generation of Planning professionals in the State. This Department offers four years regular programme in Planningi.e Bachelor of Planning (B.Plan) and two years Master of Planning (M.Plan) having intake of 60 and 18 Students respectively. It is the only Department in the State which imparts education in the field of Planning. The Department provides quality education to the Students through cutting edge Planning methodology prevailing in urban world & develops technical as well as analytical skills among the students to meet the various challenges of society pertaining to Urban & Regional planning.
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card23"></div>
        <div class="card1-text card23">
         
          <h2>Department Of Mathematics & Humanities</h2>
          <hr/>
          <p>-
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card24"></div>
        <div class="card1-text card24">
         
          <h2>Department Of Physics</h2>
          <hr/>
          <p>-
			</p>
        </div>
    </div>
    </div>
     <div class="col-md-4">
       <div class="card1">
        <div class="card1-image card25"></div>
        <div class="card1-text card25">
         
          <h2>Department Of Chemistry</h2>
          <hr/>
          <p>-
			</p>
        </div>
    </div>
    </div>
  </div>
</div>
    
<?php
  include "components/common/footer.php";
?>
      
</body>
</html>
