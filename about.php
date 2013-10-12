  <?php
  	$title = "About Us";
    require("header.php");
  ?>
  	<div class="navbar navbar-fixed-top center nav-collapse collapse">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav">
            <li class="top-bar"><a  href="index.php">HOME</a></li>
            <li class="top-bar active"><a class="active" href="about.php">ABOUT US</a></li>
            <li class="top-bar"><a href="involve.php">APPLY</a></li>
            <li class="top-bar"><a href="committees.php">COMMITTEES</a></li>
            <li class="top-bar"><a href="preparation.php">PREPARATION</a></li>
            <li class="top-bar"><a href="media.php">EXTRAS</a></li>
            <li class="top-bar"><a href="involve.php">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	<div class="container standard-bar">
      <h3 class="standard">About Us</h3>
    </div>

    <div class="container row-home">
    	<h3 class="title-section">What is HMUN?</h3>
    	<hr class="title-section"/>
    	<div class="about-span">
	        <div class="about-section">
		        <p>Harvard Model United Nations is a four-day international relations simulation for high school students held annually in downtown Boston.  At HMUN, delegates gain insight into the workings of the United Nations and the dynamics of international relations by assuming the roles of UN representatives and members of other international bodies and national cabinets. HMUN is an exciting opportunity for students to debate issues that confront world leaders and to draft resolutions in response to these global issues. Participants will develop their abilities to work with others who are equally motivated and passionate about the topics of debate and to respond to global concerns.</p>
		    	<p>HMUN 2014 builds upon decades of experience. In 1927, Harvard held its first annual Model League of Nations, followed by the first Model United Nations conference in 1953. This longevity and the dynamic that only a conference of our size can provide make HMUN the preeminent simulation of its kind in the world.</p>
		    </div>
			<div class="about-section">
				<p>True to the spirit of the United Nations, founded in 1945, HMUN strives to foster a constructive forum for open dialogue on complex global issues, including international peace and security and economic and social progress. HMUN stresses the in-depth examination and resolution of pressing issues, emphasizing process over product. During the conference, students learn the importance of balancing national interests with the needs of the international community, while also learning about the powers and limitations of international negotiation. Delegates will preserve their countries’ national policy while negotiating in the face of other, sometimes conflicting, international policies.</p>
			</div>
       	</div>
    </div>
    <div class="container row-home secretariat-grid">
    	<h3 class="title-section">The Secretariat of HMUN 2014</h3>
    	<hr class="title-section"/>
		<div class="about-span">
			<?php
				$secretariat = array(
					array("name" => "Samuel H. Leiter", "position" => "Secretary-General", "id" => "sam"),
					array("name" => "Miranda M. Ravicz", "position" => "Director-General", "id" => "miranda"),
					array("name" => "Ruth D. Kagan", "position" => "Administration", "id" => "ruth"),
					array("name" => "Robert C. Kivell", "position" => "Business", "id" => "robert"),
					array("name" => "Samia Kayyali", "position" => "Comptroller", "id" => "samia"),
					array("name" => "Eva A. Guidarini", "position" => "Innovation & Technology", "id" => "evag"),
					array("name" => "Eliza Pan", "position" => "General Assembly", "id" => "eliza"),
					array("name" => "Teresa Yan", "position" => "EcoSoc", "id" => "teresa"),
					array("name" => "Eva M. Harvey", "position" => "Specialized Agencies", "id" => "evah")
				);
				foreach($secretariat as $person) {
					$item = $person;
					require("assets/php/about-photo.php");
				}
			?>
    	</div>
	</div>

		
    	<div style="display: none">
			<div id="sam">
	            <div class="pop-profile">
	                <img src="assets/img/sam.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Samuel H. Leiter <small>&mdash; Secretary-General</small></h4>
	                <p>Samuel H. Leiter is a senior concentrating in Government with a Secondary Field in Mind, Brain, and Behavior and a language citation in Arabic. His academic interests include organizational behavior, the politics of intergroup relations, and the psychology of negotiation.</p>
	                <p>Of course, these interests pale in comparison to his love for Harvard Model United Nations! Originally from the New York City area, Sam now lives equally in Winthrop House and the HMUN office. He has been involved with Model United Nations since his freshman year of high school, and is currently active within the Harvard International Relations Council as a member of the Board of Directors.</p>
	                <p>Outside of MUN, Sam enjoys devouring books, fighting caffeine withdrawal, and traveling. He is honored to serve as the Secretary-General of this sixty-first session of Harvard Model United Nations, and is looking forward to another great year!</p>
	                	<p>Email Sam at: <a href="mailto:sg@harvardmun.org">sg@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="miranda">
	            <div class="pop-profile">
	                <img src="assets/img/miranda.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Miranda M. Ravicz <small>&mdash; Director-General</small></h4>
	                <p>Miranda M. Ravicz is a senior studying Neurobiology and Global Health & Health Policy. She has staffed in many capacities with the Harvard International Relations Council — highlights include Under-Secretary-General for Administration of HMUN 2013, Co-Director of the Harvard Program for International Education, and Director of Specialized Agencies at HMUN China, HMUN India, and HNMUN (Harvard’s conference for college students).</p>
	                <p>Miranda grew up in sunny Southern California, but she was born in Alaska and returns there in the summers with her family. She also works at the Labs of Cognitive Neuroscience at the Children’s Hospital Boston, and when she isn’t doing MUN-related activities, she is working on her thesis about happy babies. In her spare time, she enjoys karaoke, picnics, and road trips.</p>
	                <p>Miranda is greatly looking forward to welcoming you to Harvard Model United Nations 2014, and she plans to work with the rest of Secretariat and the HMUN staff to make this conference experience an unforgettable one.</p>
	                <p>Email Miranda at: <a href="mailto:dg@harvardmun.org">dg@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="ruth">
	            <div class="pop-profile">
	                <img src="assets/img/ruth.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Ruth D. Kagan <small>&mdash; Under-Secretary-General for Administration</small></h4>
	                <p>Ruth D. Kagan is a junior at Harvard studying Molecular and Cellular Biology. Originally from the suburbs of New York City, she realized her love for Model UN during her freshman year of high school. Seventeen conferences and five years of HMUN later, Ruth’s love for Model UN has only grown. Outside of Model UN, Ruth is involved in research on-campus, focusing on understanding the visual system. When she is not in the HMUN Office or molecular biology lab, Ruth enjoys baking and cooking for her roommates, long walks in search of hot beverages, and reading whatever is in sight. Ruth also has a soft spot for nice typography.</p>
	                <p>Email Ruth at: <a href="mailto:admin@harvardmun.org">admin@harvardmun.org</a>.</p>
	                <p>Email the Administration staff at: <a href="mailto:info@harvardmun.org">info@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="robert">
	            <div class="pop-profile">
	                <img src="assets/img/robert.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Robert C. Kivell <small>&mdash; Under-Secretary-General for Business</small></h4>
	                <p>Robert C. Kivell is a junior studying Economics, with a secondary field in Statistics. He was born and raised in the suburbs of New York City, and now finds Kirkland House on Harvard’s campus to be his second home.</p>
	                <p>HMUN 2014 will be Robert’s fifth HMUN conference, having attended the conference twice as a delegate. Needless to say, he is looking forward to the Delegate Dance (and, more generally, to serving as the Under-Secretary-General for Business at the sixty-first session)!</p>
	                <p>Outside of Model UN, Robert is a member of the Harvard Sports Analysis Collective, Phillips Brooks House Association, and Harvard Financial Analysts Club.  In his free time, Robert likes to play basketball, golf, and listen to music.</p>
	                <p>Email Robert at: <a href="mailto:business@harvardmun.org">business@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="samia">
	            <div class="pop-profile">
	                <img src="assets/img/samia.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Samia Kayyali <small>&mdash; Comptroller</small></h4>
	                <p>Samia Kayyali is a junior concentrating in History of Art and Architecture with a secondary field in Social Anthropology. She is especially interested in cross-cultural issues and their manifestation in art and architecture.</p>
	                <p>Samia was born and raised in Jordan, and came to the United States to pursue her studies at Harvard. She participated in HMUN as a freshman at Harvard and has been involved with the Harvard International Relations Council ever since. She has been a part of the Administration organ for the past two years, and could not be more excited to be serving as the Comptroller for the sixty-first session of Harvard Model United Nations!</p>
	                <p>Email Samia at: <a href="mailto:comptroller@harvardmun.org">comptroller@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="evag">
	            <div class="pop-profile">
	                <img src="assets/img/evag.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Eva A. Guidarini <small>&mdash; Under-Secretary-General for Innovation & Technology</small></h4>
	                <p>Eva A. Guidarini is a junior at Harvard, studying Government with a minor in Economics and a language citation in Spanish. She grew up in several different places: California, Indianapolis, Michigan, New Zealand, and West Virginia– and likes to think of her hometown as a conglomeration of all these locations.</p>
	                <p>Eva fell in love with Model UN in her first few weeks as a freshman at Harvard, and the relationship has remained strong ever since. She has staffed and competed in over 10 conferences in the last two years, and is looking forward to making HMUN the kind of conference that will make delegates declare their love for MUN.</p>
	                <p>When not engrossed with Model UN, Eva loves waterskiing, following American politics, and reading books with happy endings. She is a committed olympaholic, a devoted foodie, and an avid sports fan.</p>
	                <p>Email Eva at: <a href="mailto:innotech@harvardmun.org">innotech@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="eliza">
	            <div class="pop-profile">
	                <img src="assets/img/eliza.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Eliza Pan <small>&mdash; Under-Secretary-General for the General Assembly</small></h4>
	                <p>Eliza Pan is thrilled to be serving as Under-Secretary-General for the General Assembly at the sixty-first session of Harvard Model United Nations. Born in the southern city of Atlanta, USA, but chiefly raised in the “Gateway to the North” of Edmonton, Canada, Eliza bridges several cultures, which has helped to foster her interest in global affairs. At Harvard, Eliza is actively involved in multiple facets of the Harvard International Relations Council. Apart from the IRC, she enjoys writing in cafés, skiing with friends, exploring obscure historical sites, and learning American Sign Language.</p>
	                <p>As a junior concentrating in Social Studies, an interdisciplinary concentration in the social sciences, Eliza is strongly interested in the intersection of social, political, economic, legal, and ethical issues in global affairs. She is therefore looking forward to overseeing diverse committees focused on the interplay of these issues.</p>
	                <p>Email Eliza at: <a href="mailto:ga@harvardmun.org">ga@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="teresa">
	            <div class="pop-profile">
	                <img src="assets/img/teresa.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Teresa Yan <small>&mdash; Under-Secretary-General for the Economic and Social Council & Regional Bodies</small></h4>
	                <p>Teresa Yan is a junior concentrating in Sociology with a secondary field in Global Health and Health Policy and a language citation in Chinese. Although New York City is her original home, she adores living in Mather House on campus. She also is immensely fond of the Economic and Social Councils and Regional Bodies, as all things about this organ are smashingly wonderful, along with watching classical Hollywood movies, listening to bossa nova and making lopsided pottery.</p>
	                <p>Email Teresa at: <a href="mailto:ecosoc@harvardmun.org">ecosoc@harvardmun.org</a>.</p>
	            </div>
        	</div>
        	<div id="evah">
	            <div class="pop-profile">
	                <img src="assets/img/evah.jpg"></img>
	            </div>
	            <div class="pop-description span-description">
	                <h4>Eva M. Harvey <small>&mdash; Under-Secretary-General for the Specialized Agencies</small></h4>
	                <p>Eva M. Harvey is a junior at Harvard concentrating in Chemistry. Originally from Cork, Ireland, she currently resides in Leverett House while her family now lives in Paris, France. She has been involved in Model UN throughout her time at college and has participated in numerous SA committees as both a delegate and a staffer. She is incredibly excited to be leading the Specialized Agencies and is looking forward to providing dedicated delegates with a thrilling crisis experience. Besides Model UN, Eva is involved in neurobiology research and currently works in Harvard’s Systems Neuroscience of Psychopathology laboratory.</p>
	                <p>Email Eva at: <a href="mailto:sa@harvardmun.org">sa@harvardmun.org</a>.</p>
	            </div>
        	</div>
    	</div>
	<?php require("footer.php") ?>