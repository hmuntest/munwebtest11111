  <?php
  	$title = "Committees";
    require("header.php")
  ?>
  <div class="navbar navbar-fixed-top center nav-collapse collapse">
  	<div class="navbar-inner">
  		<div class="container">
  		  <ul class="nav">
            <li class="top-bar"><a href="index.php">HOME</a></li>
            <li class="top-bar"><a href="about.php">ABOUT US</a></li>
            <li class="top-bar"><a href="involve.php">GET INVOLVED</a></li>
            <li><img class="logo" src="assets/img/logo.png"></li>
            <li class="top-bar active"><a class="active" href="committees.php">COMMITTEES</a></li>
            <li class="top-bar"><a href="preparation.php">PREPARATION</a></li>
            <li class="top-bar"><a href="media.php">MEDIA</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <body>
	<div class="container standard-bar">
      <h3 class="standard">Committees <span style="opacity: 0.5">| Substantive</span></h3>
    </div>

    <div class="container row-home">
    	<div>
    		<h3 class="title-section"><i class="icon-globe"></i> Why WorldMUN?</h3>
    		<hr class="title-section"/>
    		<p>Anyone who has ever staffed or attended a WorldMUN can attest to the fact that it is special. WorldMUN distinguishes itself first and foremost in its aim. Founded on the ‘WorldMUN spirit,’ it encourages delegates from around the world to share their ideas on international issues and form connections that will enable them to implement their visions for the future. Since its first session in 1991 in Miedzyzdroje, Poland, it has grown to be the most diverse university conference in the world, spanning Europe, Asia, South America, North Africa, the Middle East and North America.</p>
    		<p>Much more than a competitive conference, WorldMUN offers a truly unique experience, encompassing a wide variety of exciting social events that help delegates make memories and connections that will last a lifetime. Global Village allows delegates to share their culture through food, drink, and traditions from their countries. Cabaret, a global talent show, is a fun-filled night that celebrates the talents and culture of WorldMUN delegates. These unique WorldMUN traditions have become events that delegates look forward to year after year.</p>
    		<p>As important as its global reach is WorldMUN’s global impact. WorldMUN’s Resolution Project, founded by WorldMUN alumni, fosters social entrepreneurship and gives delegates the chance to turn their innovative ideas into a reality. Resolution fellows help mentor youth and implement their solutions to global challenges. Staying true to its mission, WorldMUN continues to shape the lives of its delegates and the world for the better.
       	</div>
    	<div>
    		<h3 class="title-section"><i class="icon-book"></i> What are the 3 organs of WorldMUN?</h3>
    		<hr class="title-section"/>
    		<p>Unlike most other conferences, WorldMUN divides all its committees into three organs: General Assembly (GA), Economic and Social Council (ECOSOC), and Specialized Agencies (SA). Each of the three substantive organs of WorldMUN offers a unique experience. In the large General Assembly committees, delegates encounter the entire range of countries and opinions that are contained in the United Nations. Their experience closely mirrors that of delegates in the actual UN. The size of GA committees means individual delegates will have to form large coalitions and make personal connections with many other delegates. In the medium-sized ECOSOC committees, delegates tackle specialized issues in smaller groups. The smaller size of ECOSOC committees allows delegates to delve into issues in more depth and get to know their entire committee. In the small Specialized Agency committees, delegates simulate the powerful UN Security Council or travel to the past in a historical committee. The small SA committees create intense discussion and responsive crises that keep delegates on their feet. The SA also features the Third Party Actors committee, where delegates travel between other committees acting as members of Non-Governmental Organizations or the press. Each organ has its own special opportunities for delegates to have a memorable experience, and we offer you to discover which one suits you best.</p>
    	</div>
    	<div>
            <h3 class="title-section"><i class="icon-lightbulb"></i> How do I succeed in a WorldMUN committee?</h3>
    		<hr class="title-section"/>
    		<p>WorldMUN is a one-of-a-kind conference in all aspects. It is also unique in how it administers awards. WorldMUN emphasizes cooperation and diplomacy, which is the main principle behind Diplomacy awards. Rather than having awards for “Best”, “Outstanding”, etc., Diplomacy awards recognize delegates for their willingness to work together and combine ideas while maintaining the integrity of their assigned country’s position. Participation in committee, positive contribution to debate and leadership qualities are all excellent attributes in a delegate. While WorldMUN encourages and recognizes hard work, thorough research of the topic areas and active participation, competitiveness should not overshadow the true mission of this conference, which is cross-cultural collaboration and commitment to creating positive change in the world. Therefore, Diplomacy awards are not solely decided by how many times a delegate spoke in committee but through a holistic evaluation of how a delegate exemplified this WorldMUN spirit.</p>
    	</div>

		<div class="committee-grid">
            <h3 class="title-section"><i class="icon-legal"></i> Meet our chairs</h3>
            <hr class="title-section"/>
            <p><i class="icon-star special"></i> Click the links below to see the WorldMUN 2014 chairs who will represent each of the WorldMUN organs:</p>
			<a href="#" class="ga-show"><h3><i class="icon-arrow-right"></i> General Assembly</h3></a>
			<div class="ga">
	    		<?php
	    			$ga = array(
						array("committee" => "DISEC", "name" => "Stewart Pine", "id" => "stewart"),
						array("committee" => "SOCHUM", "name" => "Breanna Johnson", "id" => "breanna"),
						array("committee" => "SPECPOL", "name" => "Samantha Luce", "id" => "samantha"),
						array("committee" => "WHO", "name" => "Fatima N. Mirza", "id" => "fatima"),
						array("committee" => "WIPO", "name" => "Scott S. Yu", "id" => "scott"),
						array("committee" => "HGA", "name" => "Adam Ganik", "id" => "adam")
	    			);

	    			foreach($ga as $director) {
    					$item = $director;
    					require("assets/php/committee-photo.php");
    				}
	    		?>
			</div>
    	</div>
    </div>
    <div class="container row-home committee-top">
    	<div class="committee-grid">
			<a href="#" class="ecosoc-show"><h3><i class="icon-arrow-right"></i> Economic and Social Council & Regional Bodies</h3></a>
    		<div class="ecosoc">
    			<?php
    				$ecosoc = array(
						array("committee" => "UNDP", "name" => "Joshua Zhang", "id" => "joshua"),
		    			array("committee" => "UNHCR", "name" => "Asmaa Rimawi", "id" => "asmaa"),
		    			array("committee" => "WB", "name" => "Rabiya Ather", "id" => "rabiya"),
		    			array("committee" => "EU", "name" => "Zorigoo Tugsbayar", "id" => "zorigoo"),
		    			array("committee" => "UNESCO", "name" => "Bowen Lu", "id" => "bowen"),
		    			array("committee" => "ECLAC", "name" => "Christopher Roberts", "id" => "christopher")
    				);
    				
    				foreach($ecosoc as $director) {
    					$item = $director;
    					require("assets/php/committee-photo.php");
    				}
    			?>
			</div>
    	</div>
    </div>
    <div class="container row-home committees">
    	<div class="committee-grid">
			<a href="#" class="sa-show"><h3><i class="icon-arrow-right"></i> Specialized Agencies</h3></a>
			<div class="sa">
    			<?php
    				$sa = array(
						array("committee" => "SC", "name" => "Heather Pickerell", "id" => "heather"),
		    			array("committee" => "HSC", "name" => "Dev Patel", "id" => "dev"),
		    			array("committee" => "Cabinet of Gamal Abdel Nasser", "name" => "Michael Chilazi", "id" => "chilazi"),
		    			array("committee" => "CPS", "name" => "Eva Harvey", "id" => "eva-harvey"),
		    			array("committee" => "Interpol", "name" => "Ishani Premaratne", "id" => "ishani"),
		    			array("committee" => "PRT", "name" => "Richard Ebright", "id" => "richard"),
		    			array("committee" => "TPA", "name" => "Arthur Nguyen", "id" => "arthur")
    				);
    				
    				foreach($sa as $director) {
    					$item = $director;
    					require("assets/php/committee-photo.php");
    				}
    			?>
			</div>
    	</div>

    	<div style="display: none">
        	<div id="asmaa-bio">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Asmaa Rimawi <small>&mdash; United Nations High Commissioner for Refugees</small></h4>
	                <p>Dear Delegates,</p>
	                <p>It is with great honor that I welcome you to the United Nations High Commissioner for Refugees (UNHCR). My name is Asmaa Rimawi and I sincerely look forward to meeting you all this March. As a senior studying Near Eastern Languages and Civilizations and medicine, I have had the pleasure of combining various fascinations of mine while at Harvard, a product of which has been the topic of this year’s committee. Outside of Model UN, I enjoy writing, reading, and searching for complete versions of the Harry Potter books in Arabic.</p>
	                <p>In several months, we will address some of the challenges that plague both recent and long-existing refugee populations in the Middle East and specifically the Levant. In addition to the status of these refugee populations, our committee will address the impact these groups have on the countries they flee to, as well as the obligations nearby countries, the international community, and the UNHCR have to these vulnerable populations. While considering the level of involvement the UNHCR can support as well as each country’s right to determine its own polices and laws, we will attempt to tackle issues related to progress, sustainability, and prevention. </p>
	                <p>I look forward to the discussions we will have. Feel free to email me with any questions!</p>
	                <p>Sincerely,</p>
	                <span>Asmaa Rimawi</span><br/>
	                <span>Chair, United Nations High Commissioner for Refugees</span><br/>
	                <span><a href="mailto:unhcr@worldmun.org" target="_blank">unhcr@worldmun.org</a></span>
	            </div>
        	</div>
        	<div id="asmaa-committee">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> United Nations High Commissioner for Refugees (UNHCR)<br/><br/>Topic A - The Refugee Crisis: From Palestine to Syria</h4>
	                <p>After the creation of Israel in 1948, hundreds of thousands of Palestinians found themselves searching for safe places to settle in. By 2010, the number of displaced Palestinians reached 7.1 million, with Palestinians spread around the world. Still, being relatively easy lands to reach, Jordan, Syria, and Lebanon have often been the “safe havens” for these Palestinians.</p>
	                <p>Since the onset of the Syrian civil war in 2011, over 1.5 million Syrians have fled their homes to nearby countries seeking refuge and safety. Unsurprisingly, Jordan and Lebanon have also been the destination of these refugees. The Palestinian refugees leaving Syria face new hardship as they relocate yet another time.</p>
	                <p>Sixty-five years after the majority of Palestinians fled their homes, their condition as a refugee population has seen limited improvement. With thousands still living in poor conditions, the inability, inconsistency, and even unwillingness of their host countries has greatly hindered their prospects for improved living conditions. Aside from employment and health, citizenship is still a matter of concern for certain refugee groups. With the recent influx of Syrian refugees in nearby areas, and the uncertain future of Syria, the status of the Syrian refugee population and the impact on both the Palestinian refugee population and their host countries remains vague. </p>
	                <p>What can be done to finally address the long-lasting Palestinian refugee crisis? Are improvements to the condition of the refugee camps being attempted, and are these solutions confirming the refugee status of the Palestinians or incorporating them into society? How will negotiations within Israel/Palestine impact this population? Will the addition of another refugee population further impact the ability of institutions in and out of these host countries to provide aid to either the Palestinians or Syrians? Sixty-five years from now, will Syrian refugees share a similar fate to the Palestinians? What is the role of the UNHCR? What are the limitations? </p>
	            </div>
        	</div>
        	<div id="bowen-bio">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Bowen Lu <small>&mdash; United Nations Educational, Scientific and Cultural Organization</small></h4>
	                <p>Dear Delegates,</p>
	                <p>Welcome to UNESCO! My name is Bowen Lu, and I am honored to be your chair for WorldMUN 2014. As a sophomore studying computer science, I am intrigued by the intersection of government & technology and excited to explore this area with you in the context of our topics this year. I hope that WorldMUN will be as much of a learning experience for you as it will be for me.</p>
	                <p>I was born and raised in eastern China. My family and I immigrated to America in 1999. We moved around quite a bit in the US, from Texas, to Illinois, to New Jersey, where we finally settled. Personally, I enjoy running, singing, writing poetry, and learning about new languages and culutres. I have traveled to Germany, Austria, France, Italy, Switzerland, and Luxembourg, and I’m excited to be meeting you all in Belgium!</p>
	                <p>Cheers,</p>
	                <span>Bowen Lu</span><br/>
	                <span>Chair, United Nations Educational, Scientific and Cultural Organization</span><br/>
	                <span><a href="mailto:unesco@worldmun.org" target="_blank">unesco@worldmun.org</a></span>
	            </div>
        	</div>
        	<div id="bowen-committee">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> United Nations Educational, Scientific and Cultural Organization (UNESCO)<br/><br/> Topic A - Global entrepreneurship</h4>
	                <p>The global community is becoming increasingly interconnected and accessible. Societal issues such as health, energy, and access to resources have inspired social entrepreneurs worldwide to develop innovative solutions. Unfortunately, the gears of capitalism do not always drive the engine of social entrepreneurship. What can the UN and its constituent national governments do to encourage and/or subsidize innovation for social good? National governments often possess vast amounts of data, with regard to demographics, resource usage, and the like. How can governments make such valuable information accessible to entrepreneurs? How can the UN facilitate the open access of information across national boundaries and language barriers? What are the potential benefits/drawbacks to government backing private ventures, seen by some as sticking its nose into the private sector? Can innovative solutions be developed and expanded when their target market cannot afford to pay for such products and services?</p>
					<h4 class="popup-title"> Topic B - STEM education</h4>
	                <p>STEM education, or education in Science, Technology, Engineering, and Mathematics, is on the rise, both in developed countries (the US, EU nations) and in developing countries (China, India). This emphasis has contributed to rapid developments in science and technology, transforming the way we think and the way we live. But what effect do differences in culture and educational systems have on the quality of STEM education in different countries? Students in the US, on average, lag behind their peers in China and India in terms of scientific reasoning and mathematical problem solving. How can we learn from leading STEM countries to maximize the benefits of STEM education? Should curricula emphasize STEM at the expense of the arts and humanities? Does STEM education have a place in developing countries, whose inhabitants yearn for basic necessities such as sustainable nutrition and clean water instead of quadcopters and iPhones? It may seem more practical to educate developing nations in practices, such as irrigation and agriculture. UNESCO should consider STEM education in different national contexts and support the establishment of appropriate education systems for those contexts.</p>
	            </div>
        	</div>
        	<div id="rabiya-bio">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Rabiya Ather <small>&mdash; World Bank</small></h4>
	                <p>Dear Delegates,</p>
	                <p>It is my distinct pleasure to welcome you to the World Bank at World Model United Nations 2014. My name is Rabiya Ather and I am very excited to serve as your committee chair. I grew up in Lahore, Pakistan and am currently a junior at Harvard, concentrating in Applied Mathematics with Economics and Computer Science.</p>
	                <p>I have participated in several Model United Nations conferences since high school, both as a delegate and a committee chair, but have found the WorldMUN experience to be particularly unique and special. I am sure WorldMUN 2014 will be no exception. At conference, our committee will discuss a topic that has recently gained prominence in the international community. Access to finance has become increasingly important in policymakers’ agenda and it is now clear that access to finance or a lack of it is an obstacle to development and poverty alleviation in most developing countries. Given that the World Bank is the premier international organization for fighting poverty and facilitating development, we will be dealing with a topic that is extremely significant in the status quo. I am sure you will appreciate the pertinence of the problem and will come well prepared to positively contribute to the committee.</p>
	                <p>I look forward to stimulating debate and to meeting each and every one of you in Brussels at WorldMUN 2014. Please feel free to e-mail me if you have any questions or concerns.</p>
	                <p>Best,</p>
	                <span>Rabiya Ather</span><br/>
	                <span>Chair, World Bank</span><br/>
	                <span><a href="mailto:wb@worldmun.org" target="_blank">wb@worldmun.org</a></span>
	            </div>
        	</div>
        	<div id="rabiya-committee">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> World Bank<br/><br/> Topic A - Improving Access to Finance</h4>
	                <p>According to a World Bank report, three-quarters of the World's poor are "unbanked", with no access to the formal banking system. This poses serious problems for economic and social development and is an obstacle to poverty alleviation. There is significant evidence today of a strong causal relationship between the depth of the financial system (as measured, for example, by the supply of private credit, stock market capitalization or other financial measures relative to GDP) and investment, growth, poverty, total factor productivity, etc. In fact, initial financial development is one of the few robust determinants of the subsequent growth of countries as proven by many empirical cross-country tests. Facilitating access to credit lines and other financial products, like savings and insurance, is critical for economic development and overall improvement in quality of life. The World Bank currently offers support to member nations by providing services that facilitate Microfinance, Small and Medium Enterprise (SME) banking, Mobile financial services, Credit Bureaus etc. Given these efforts, what more can the World Bank do to improve access to finance? How can the World Bank best use its funding and loan mechanisms to foster development in these difficult environments? What kind of partnerships with governments can facilitate better and more accessible banking? </p>
	            </div>
        	</div>

        	<div id="joshua-bio">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Joshua Zhang <small>&mdash; United Nations Development Programme</small></h4>
	                <p>Dear Delegates,</p>
	                <p>Welcome to UNDP! My name is Joshua Zhang and it will by my honor to serve as your chair for this committee. I hope all of you guys are as excited as I am to not only to visit a new destination, but to also have the best WorldMUN conference ever in 2014!</p>
	                <p>I was born in Lubbock, Texas but raised in Detroit, Michigan and am currently a senior studying Economics at Harvard. This will be my second, and last, WorldMUN conference and I know that it will be the best one yet. I chose the "Clean Water Availability" and "Genetically Modified Foods" topic for this year's UNDP conference not just because I like drinking and eating, but because they are two of the most important resources for development: water and food. Clean water and enough food are essential in helping have a better life. However, clean water is not available for everyone, and countless conflicts, known as "Water Wars", have occurred as a result. Both developed and developing countries alike share responsibility in ensuring that everyone has adequate access to clean water. Genetically modified (GM) foods, on the other hand, brings another issue. While GM foods may make food more plentiful, it does so at what expense? The health effects and long-term sustainability effects of GM foods are still uncertain and it also exacerbates the disparity between advanced capitalist agricultural or biotechnology industries and the working farmer in developing countries. Therefore, nations have a responsibility to ensure proper food access in a sustainable, equitable way.</p>
	                <p>Other than discussing international relations, there are few things in life I enjoy more than food, since I probably eat 2-3 times more than the average human. In addition to that though, I love travelling, sports, and just hanging out with friends. I'm a huge hip-hop snob and I love playing soccer, but my favorite past time is still just kickin' it with the guys. It really will be a pleasure to get to know each and every one of you so please do not hesitate to ever reach out.</p>
	                <p>Best wishes,</p>
	                <span>Joshua Zhang</span><br/>
	                <span>Chair, United Nations Development Programme</span><br/>
	                <span><a href="mailto:undp@worldmun.org" target="_blank">undp@worldmun.org</a></span>
	            </div>
        	</div>
        	<div id="joshua-committee">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> United Nations Development Programme (UNDP)<br/><br/> Topic A - Clean Water Availability</h4>
					<p>Clean water is an increasingly scarce resource in our world. Africa still lacks accessibility to clean water in many parts of the country, particularly in the sub-Saharan region, as well as many parts of Southeast Asia and Latin America. Since clean water is essential to living, multiple conflicts known as “Water Wars” have erupted in these areas. Therefore, ensuring that everyone has access to it should be one of the primary goals of the United Nations Millennium Development Goals. I am interested in this topic because it was one of the topics for policy debate my sophomore year in high school. I have also read a lot of literature on this topic too since I had to research it for debate.</p>
	            	<h4 class="popup-title">Topic B - Genetically Modified Foods</h4>
	            	<p>Developing nations are increasingly facing pressure to use genetically modified foods in an effort to compete with the industrial agriculture or industrialized nations. With the development of terminator seeds, agricultural subsidies in developed nations, and the concentration of industrial power in capitalist nations for agriculture, many fear that food is being commoditized to an industry that threatens our health, exacerbates income disparities, and threatens the environment. We will analyze how realistic these threats are to our environment, if GMO’s are worth this perceived threat (crop-yield, cheaper production, etc.), or what efforts can be made to promote more organic food production.</p>
	            </div>
        	</div>

        	<div id="christopher-bio">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Christopher Roberts <small>&mdash; United Nations Economic Commission for Latin America and the Caribbean</small></h4>
	                <p>Dear Delegates,</p>
	                <p>My name is Christopher Roberts and I have the pleasure of chairing this committee during WorldMUN 2014! I am very excited about being part of ECLAC with all of you this year. I take great interest in Latin America and the Caribbean mainly because of their growing significance in our globalized world but also because I am Trinidadian, giving this personal meaning. </p>
					<p>As an economics concentrator I am passionate about how the numerous developments in the region will shape our future. The topics we will discuss address the rich growth the LAC has experienced this past decade. Looking forward, there are several obstacles to continuing progress including climate change. Increased energy use to fuel expansion has contributed to accelerated deterioration of our atmosphere. The shift away from fossil fuels to renewable energy can be a solution that offers rich economic gains down the road. The robust growth of the region has also brought benefits to the LAC. The region has always been known for stark inequality and although this is a welcome change, more can be done to increase equity and efficiency. I expect resolutions to hold the future in priority and I look forward to the amazing ideas we will tackle in debate.</p>
	                <p>In my spare time I love to play and watch basketball or listen to Caribbean music such as reggae and soca. On campus I volunteer at a basketball program with young kids and work part-time. This is my first MUN conference ever and I am eager to meet all of you and learn more about these dynamic issues. I hope that you all share this passion with me and embrace this opportunity to meet people from around the world, see new perspectives and have fun!</p>
	                <p>Best,</p>
	                <span>Christopher Roberts</span><br/>
	                <span>Chair, Economic Commission for Latin America and the Caribbean</span><br/>
	                <span><a href="mailto:eclac@worldmun.org" target="_blank">eclac@worldmun.org</a></span>
	            </div>
        	</div>
        	<div id="christopher-committee">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Economic Commission for Latin America and the Caribbean (ECLAC)<br/><br/> Topic A - Sustainable Energy and Growth</h4>
					<p>Perhaps the most important element in creating robust economic growth lies in a viable energy sector. The LAC continues to exemplify healthy expansion as strong emerging markets, however the future path of that expansion will be shaped on how the region powers it. The region faces the challenge of maintaining energy efficiency with sustainability in a world of critical climate issues. Developed nations expect emerging markets to be pursuing “green” energy; should they listen when those same developed nations did not do the same during their progression? Should the LAC embrace sustainable energy-solar, wind, biomass among others- or can efficiency be achieved through other means? These questions reflect the economic significance energy has in the LAC, which will only increase in years to come.</p>
	            	<h4 class="popup-title">Topic B - Driving Income equality in the LAC</h4>
	            	<p>Unlike much of the western world, the LAC has notably experienced significant reduction in income inequality over the past decade. This fortunate change has many sources, all rooted in the above-average growth the region has seen over those years. Still, inequality remains a substantive issue in Latin America and the Caribbean. Which factors were most prevalent in bringing about their achievement in reducing inequality- but more importantly what does the LAC need to keep doing (or start doing) for this to continue? The drive to income equality is correlated with the regions growth and reduction in poverty, amongst other critical developments. It represents now the success the LAC has seen, but can represent the potential for even greater attainment down the road.</p>	            	
	            </div>
        	</div>

        	<div id="zorigoo-bio">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> Zorigoo Tugsbayar <small>&mdash; European Union</small></h4>
	                <p>Dear Delegates,</p>
	   				<p>It’s a pleasure to welcome you to the European Union this coming spring. My name is Zorigoo Tugsbayar and having grown up in Europe, I’m incredibly passionate about this committee. I am currently a junior studying Statistics and Economics, have been involved with debate and MUN since my high school years, and currently staff the Boston conferences and travel on the Harvard MUN team. Apart from MUN, I serve on the student government, work for the student newspaper and serve as a board member on the Association of Mongolian Students in America.</p>
	                <p>Within the heart of the European Union, in Brussels, we will discuss some of the long-term challenges the European Union faces as an institution. The individual topics are quite distant in nature but will be challenging to come up with a solution that will prove satisfactory for all member states of the Union. As we look for viable answers to the problems, we will face the issues of national sovereignty and international impact constantly within the committee but hopefully will be able to come up with a satisfying solution.</p>
	                <p>Sincerely,</p>
	                <span>Zorigoo Tugsbayar</span><br/>
	                <span>Chair, European Union</span><br/>
	                <span><a href="mailto:eu@worldmun.org" target="_blank">eu@worldmun.org</a></span>
	            </div>
        	</div>
        	<div id="zorigoo-committee">
	            <div class="pop-committee-description">
	                <h4 class="popup-title"><i class="icon-check"></i> European Union<br/><br/> Topic A - The Sovereign-Debt Crisis</h4>
            		<p>How can a government survive in the long run with a long-term interest rate of 30% on bonds? This was the case in Greece and various other countries for a prolonged amount of time. The European monetary union was bound to become difficult to manage given the different fiscal policies of the various member states. Eventually, the lack of coordination between fiscal and monetary policies created a difficult debt/bond crisis. Starting with Greece, the EU experienced a variety of sovereign debt crisis in Spain, Ireland and Cyprus. Albeit, in the short-term high long-term interest rates have been eliminated from the Euro Area, the fundamental question is whether the European monetary union can survive the different national political and economic differences without throwing the world financial markets in a tantrum.</p>
            		<h4 class="popup-title">Topic B - Sinti and Roma</h4>
            		<p>Sinti and Roma arrived in Europe around the 15th century and currently account for the largest minority in Europe. Since the 19th century, Sinti and Romas have been discriminated against and segregated from the main population in the respective population. The most horrendous incident occurred during the Second World War when the Final Solution killed between 200,000 and 1,500,000 people of Sinti and Roman descent. Even though the situation has improved since the war, the traditionally nomadic (most of them are currently settled) Sinti and Roma are still heavily discriminated against in Europe and have difficulty getting jobs or services. Especially now, when Europe is facing a rampant economic and financial crisis, extremism against the Sinti and Roma population has flared up in various countries. Will the European Union be able to resolve this issue coherently, defending its motto of “United in diversity” and overcoming another phase of discrimination that has plagued the continent for the better part of its history?</p>
	            </div>
        	</div>

            <div id="stewart-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Stewart Pine <small>&mdash; Disarmament and International Security Committee </small></h4>
                    <p>Dear Delegates,</p>
                    <p>My name is Stewart Pine, and welcome to WorldMUN 2014! I am going to be your chair for the Disarmament and International Security Committee, and I am so excited.</p>
                    <p>I am currently a fourth year student at Harvard studying Chemical and Physical Biology with a minor in Math. On campus, I volunteer with the Red Cross, conduct research on malaria, help teach several math classes and mentor high-school aged students. Outside of schoolwork and activities, I like travelling (a lot), eating various high calorie foods, biking all over Boston, and watching big-budget summer blockbusters.</p>
                    <p>I participated in MUN in high school and only recently rejoined the scene here at Harvard. I served as Chair of SPECPOL last year and I will be directing several other committees at other Harvard conferences later this year. I am so excited for WorldMUN, and for DISEC in particular. The topics I’ve chosen, Drone Attacks and the Security of Cities, are hopefully unique and exciting enough to really start to make you think about possible solutions. I cannot wait to see what you all bring to the debate!</p>
                    <p>Most importantly, I want DISEC to be a fun, memorable experience, and that starts with making everyone as comfortable as possible. If you have any questions or concerns, feel free to e-mail me, and I cannot wait to meet all of you in the fall!</p>
                    <p>Sincerely,</p>
                    <span>Stewart Pine</span><br/>
                    <span>Chair, Disarmament and International Security Committee</span><br/>
                    <span><a href="mailto:disec@worldmun.org" target="_blank">disec@worldmun.org</a></span>
                </div>
            </div>
            <div id="stewart-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Disarmament and International Security Committee<br/><br/>Topic A - Drones Without a Declaration of War</h4>
                    <p>Recent usage of drones, predominantly by the United States but including other nations as well, has prompted much alarm. Drones, which are capable of travelling immense distances and are touted as potentially life saving due to their remote operation, have been the cause of hundreds of civilian deaths in Pakistan and other countries. Notably, use of these drones has occurred without a formal declaration of war between nations, and many critics have lamented the increase in “video-game” warfare that removes all accountability in war. Delegates will be tasked with determining the circumstances under which use of drones is acceptable without a formal declaration of war. Furthermore, delegates must decide how the international security community must deal with drone usage between non-belligerent nations. </p>
                    <h4 class="popup-title">Topic B - Security in Cities</h4>
                    <p>Today’s cities serve as a microcosm for entire nations, welcoming migrants and tourists alike, as well as serving as the home of many important industries and government agencies. Cities are therefore of key importance in international security, and the problem of violence is beginning to threaten that security. The growing problem of gang violence and the rise in weapons and human trafficking has placed the security of major cities in Brazil, Europe, India, the United States, and elsewhere in doubt. Delegates must first decide what role and capacity the United Nations has in strengthening the security of major cities. Then, delegates must create a broad platform to address the various problems, in particular violence, that have arisen in cities across the globe. </p>
                </div>
            </div>

            <div id="breanna-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Breanna Johnson <small>&mdash; Social, Humanitarian and Cultural Affairs Committee </small></h4>
                    <p>Dear Delegates,</p>
                    <p>My name is Breanna Johnson and I am a rising junior at Harvard.  I was born and raised in North Carolina, and since starting college in Boston I have had opportunities to travel to China, Canada, and all throughout Europe.  These experiences have sparked my interest in travel and international affairs, specifically international health policy.</p>
                    <p>To pursue my interest in health policy, I am working towards a minor in Global Health and Health Policy.  I am also interested in studying recent advances in stem cell research.  I am majoring in Human Developmental and Regenerative Biology, and I am currently working in an Immunology Stem Cell lab studying a new drug for Multiple Sclerosis.</p>
                    <p>When I am not studying, I spend most of my time dancing at rehearsal.  I have danced ballet for the past sixteen years, and since coming to Harvard I have explored ballroom, hip hop, and indian dancing.  I am in the Harvard Ballet Company, the Harvard Ballroom Dance Team, and Expressions (the Harvard hip hop group).  This year I have worked towards combining my passion for dance and medicine by organizing a sixteen hour dance marathon at Harvard that raises money towards pediatric oncology.</p>
                    <p>I have met an incredibly diverse and amazing group of students at Harvard and I cannot wait to meet and learn from everyone at the Harvard Model United Nations Conference.  Be prepared to surprise yourself at this conference, pushing yourself academically, socially, and creatively.  I’m so excited to work with everyone.  See you soon!</p>
                    <p>Sincerely,</p>
                    <span>Breanna Johnson</span><br/>
                    <span>Chair, Social, Humanitarian and Cultural Affairs Committee</span><br/>
                    <span><a href="mailto:sochum@worldmun.org" target="_blank">sochum@worldmun.org</a></span>
                </div>
            </div>
            <div id="breanna-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Social, Humanitarian and Cultural Affairs Committee<br/><br/>Topic A - Addressing Mental Illness</h4>
                    <p>Mental illness and mental health problems are medical conditions that interfere with people’s thinking, feeling, and ability to relate to others and complete daily tasks.  Mental disorders are common to all ages, races, income levels, and countries, with over a third of people in most countries affected, totaling about 450 million people worldwide.</p>
                    <p>Mental illness is a concept that has changed over time, among generations and countries, and requires society to adapt as it shapes public perception of mental illness.  There has been an ongoing debate about the definition of mental illness, the support and funding needed behind mental illness, and how great a factor mental illness should be in many aspects of society.  Society’s support and understanding of mental illness is ever changing and extremely important to development as mental illness affects a wide range of elements in society.</p>
                    <h4 class="popup-title">Topic B - Reproductive Education and Control</h4>
                    <p>As the pressing topics of overpopulation and HIV/AIDS stimulate debate surrounding an increase in education and accessibility of family planning and birth control, reproductive education and control become prominent in international discussion.  The level of reproductive education taught varies immensely among countries and cultures, and contention arises over the responsibility of institutions to teach reproductive health.</p>
                    <p>Questions will arise over whether we should have reproductive education and what form it should take.  The cultural and religious barriers may be discussed, as well as what rights women have over reproductive control.  Delegates will discuss what forums should provide this education, whether it be school or the workforce. This topic will require delegates to take a multifaceted approach to understanding and designing a set of standards delineating the course countries should take in approaching reproductive education.  The result of this conference will affect topics covering population growth, women’s health, and disease control.</p>
                </div>
            </div>
            
            <div id="samantha-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Samantha Luce <small>&mdash; Special, Political and Decolonization Committee </small></h4>
                    <p>Dear Delegates,</p>
                    <p>It is my distinct honor to welcome you the WorldMUN 2014 Special, Political and Decolonization Committee! My name is Samantha Luce, and I am a sophomore at Harvard College. I grew up in sunny Florida, and have been involved with MUN since my freshman year of high school. I am jointly studying government and sociology. I think of one as a study focused on systems, and the latter as a study of people, which is a perfect compliment: when trying to make sense of development outcomes, systems and people are inextricably linked.</p>
                    <p>I’m excited that one of our topics involves a continental focus, on Africa.  This most recent summer, I traveled to South Africa. Experiencing firsthand a country that has wrestled with these exact topics, and especially interacting with people for whom these political challenges are a daily reality, makes our work more real. I implore you to keep in mind the real-world relevance of our discussions, which banter and heated debate can sometimes lure us to forget.</p>
                    <p>Outside of MUN, I am an editor for Harvard’s international relation (IR) magazine, the Harvard International Review, and serve on our IR Council’s Board of Social Impact. I also belong to a slam poetry group on campus, perform hip-hop dance, love to thrift shop, and exploring the cities of Cambridge and Boston as often as I can. I’m excited to meet you all, not merely as delegates, but as collaborators in making the world a better place. I hope I can do my part in giving you a dynamite WorldMUN experience.</p>
                    <p>All my best,</p>
                    <span>Samantha Luce</span><br/>
                    <span>Chair, Special, Political and Decolonization Committee</span><br/>
                    <span><a href="mailto:specpol@worldmun.org" target="_blank">specpol@worldmun.org</a></span>
                </div>
            </div>
            <div id="samantha-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Special, Political and Decolonization Committee<br/><br/>Topic A - Statebuilding in Africa</h4>
                    <p>While each of Africa’s 54 states owes its contemporary political culture to a unique set of historical developments, the continent has been shaped by its common exposure to the slave trade and colonization. The disproportionate incidence of civil wars, coups, state failure, political violence, hybrid regimes, and rigged elections across the continent suggest a failure to establish institutional legitimacy. Traditional structures are legitimized by their derivation from social contracts between rulers and people, rather than operating under the artificial legitimacy implicit within colonialism. The arbitrary delineation of African states in the 1885 Berlin Conference epitomizes this dissociation of governed units from political legitimacy. During decolonization, policy-makers grappled with the challenge of establishing consent where preexisting legitimacy has been eradicated. In the half-century since the wave of African decolonization, there has been a huge incursion of patrimonialism. This committee must address how patrimonialism contributes to political instability, and the role that policy could play in realigning incentives for bureaucrats to distribute state resources responsively to constituent interest, while weighing the particular challenges of failed states.</p>
                    <h4 class="popup-title">Topic B - Ethnic Conflict</h4>
                    <p>Ethnic-based tension has been a component in many of the most brutal conflicts in the last century, characterizing struggles for autonomy, as seen in Georgia, Yugoslavia, and Northern Ireland, cross-border violence in India-Pakistan and Israel-Palestine, as well as genocide as seen in Rwanda and Sudan. Many of these conflicts intuitively seem the consequence of tragic happenstance, when two groups live in close proximity are incapable of settling differences. However, prevailing academic literature suggests that ethnicity is not primordial, evidenced by the evolution of particular ethnic identities over time, and commonly, a history of peaceful relations between warring ethnic groups in the decades before any outbreak of violence. The central question then becomes whether ethnicity is itself a cause of conflict, or if ethnic divisions correlate with the outbreak of conflict because such divisions are hardened by violence and polarization that is derived from other, more politicized power struggles. Ethnically charged rhetoric is often employed to garner support in high-stakes elections, constructing an “us versus them” mentality that provides the urgency to drive political mobilization. The critical stage for conflict-prevention occurs when ethnic tension gives way to distrust and insecurity, ripe with the incentive for groups to arms themselves in an escalating arms race. This committee must address how ethnic hostility can be divorced from political discourse, without overstepping the autonomy of domestic politics.</p>
                </div>
            </div>
            
            <div id="fatima-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Fatima Mirza <small>&mdash; World Health Organization </small></h4>
                    <p>Dear Delegates, Faculty Advisors and Friends of WorldMUN,</p>
                    <p>It is my pleasure to serve as the chair for the World Health Organization for Harvard World Model United Nations 2014! My name is Fatima Mirza and I am currently a junior at Harvard College studying Chemical & Physical Biology with a secondary in Global Health & Health Policy and Spanish. From a research standpoint, I specialize in molecular Alzheimer’s and cancer research. However, with our rapidly globalizing world and innovative technologies, it is clear that the scientist and the politician can no longer reside within their traditional, comfortable spheres. Rather, we as scientists, clinicians, politicians, and citizens of the world must encourage collaboration and understanding as well as a novelized interdisciplinary approach. For this very reason, the World Health Organization is truly the model committee. Serving as Under-Secretary-General of Finance and Operations at WorldMUN 2013, I realized that I had an intense passion for international relations and facilitating productive dialogue between individuals from unique background.</p>
                    <p>This year, the WHO will tackle an especially relevant issue: that of global resource management and distribution. Every year, billions of dollars are “invested” into a system of healthcare. Instead of effecting positive change, a large fraction of these resources are lost into a bureaucratic sinkhole. Our committee will attempt to identify understand the complex interaction between managing primary and specialized health receivables, their producers, and the programs that attempt to coordinate the players. </p>
                    <p>I hope our time in committee will provide a comfortable platform for discussing this complex issue. Moreover, I am so incredibly excited to meet each and every one of you. Here’s to WorldMUN 2014!</p>
                    <p>Sincerely,</p>
                    <span>Fatima Mirza</span><br/>
                    <span>Chair, World Health Organization</span><br/>
                    <span><a href="mailto:who@worldmun.org" target="_blank">who@worldmun.org</a></span>
                </div>
            </div>
            <div id="fatima-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> World Health Organization<br/><br/>Topic A - The Underlying Causes of Health Disparities</h4>
                    <p>The World Health Organization is referred to as the “directing and coordinating authority for health within the United Nations system”.  Its primary role is to provide leadership on matters pertaining to global health, determining research priorities, setting norms and standards, and providing technical support to countries to implement evidence-based health policy priorities. The WHO functions on the foundation that health is a shared responsibility and equitable access to care is a priority for the 21st century.</p>
                    <p>Although this committee will be a one-topic forum, the breadth of policy directives under the auspices of the World Health Organization affords our simulation an opportunity for profound engagement. During our time together, we will attempt to analyze the underlying causes of healthcare disparities, both de facto and institutionalized. As a coordinating agency, our concrete objective will be to identify the lapses in inter-agency and non-governmental communication, as well as determine appropriate methods to address said issue. As this year’s topic is undeniably one of the most difficult in WorldMUN history given its auspicious goals, we will attempt to focus primarily on developing countries, specifically within Africa and South Asia. This does not exclude from the discussion developed nations such as the United Nations, Canada, and Australia, which possess their own set of complex politicized bureaucracy that are themselves difficult to navigate. However, our efforts and entrepreneurial thinking may effect the most change within the aforementioned realm.</p>
                </div>
            </div>

            <div id="scott-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Scott Yu <small>&mdash; World Intellectual Property Organization </small></h4>
                    <p>Dearest WIPO Delegates,</p>
                    <p>Welcome to the 23rd Session of Harvard World Model United Nations!  My name is Scott Yu, and it is an incredibly humbling privilege and honor to serve as your Chair for the World Intellectual Property Organization (WIPO) at WorldMUN 2014 after chairing and serving on WorldMUN Secretariat for two conferences. I am currently a fourth-year student at Harvard, studying Statistics, whose interests extend beyond numbers to economics, social theory, and music.  Outside of my courses, I enjoy writing/producing music, DJ-ing, and trying new foods. </p>
                    <p>Even as globalization and technological innovation increasingly push the envelope of human capacity, the international community faces the challenge of how to fuel the improvements in quality of life in a sustainable way.  Specifically, in order for the fruits of human creativity to materially impact people globally, we must incentivize talented innovators to continue to sow the seeds of ingenuity and harvest their deserved rewards.  Broadly, this is the mandate of WIPO, viz. answering the challenge of adapting existing intellectual property systems and protection modalities to a continually evolving global marketplace.</p>
                    <p>This particular iteration of WIPO will confront the problem of global healthcare access in the context of proprietary pharmaceuticals and will untangle the intricate issues surrounding digital piracy and artistic creativity in the cyber age.  These topics will create unexpected alliances and divisions and will engage the personal experiences of many of you.  I look very forward to the fecund, intense debate that is sure to take place in the sessions ahead.</p>
                    <p>If you have any questions at any point in your research process or just want to say hello, please feel free to e-mail me.  I cannot wait to meet all of you at WorldMUN 2014!</p>
                    <p>Warmest Regards,</p>
                    <span>Scott Yu</span><br/>
                    <span>Chair, World Intellectual Property Organization</span><br/>
                    <span><a href="mailto:wipo@worldmun.org" target="_blank">wipo@worldmun.org</a></span>
                </div>
            </div>
            <div id="scott-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> World Intellectual Property Organization<br/><br/>Topic A - Pirates and Printing, Intellectual Property Challenges in a Digital Age</h4>
                    <p>The last decade has witnessed a dramatic departure from physical media.  The software, book, and entertainment industries have for years battled the inexorable pace of digitalization and its associated demons.  With the advent of 3-D printing, theft of intellectual property has expanded beyond bits and bytes shuttled through cyberspace through the materiality of literal, tangible replication.  Legal reactions have heretofore been regional or unilateral.  Prominent media coverage of such legislation as the Stop Online Piracy Act and the PROTECT IP Act proposed in the United States and the Anti-Counterfeiting Trade Agreement has catapulted the debate into the popular forum.  This Topic Area will challenge delegates to contemplate the far-reaching consequences tomorrow of today’s technological advances and to put their personal experiences in perspective as they brainstorm solutions to this highly contentious problem.</p>
                    <h4 class="popup-title">Topic B - Exporting Health, Global Intellectual Property and Access to Healthcare</h4>
                    <p>Every year, more than 10 million people die from infectious disease, with the vast majority of deaths occurring in the developing world.  Approximately 9000 die every day from HIV/AIDS, tuberculosis and malaria, and 6000 of these are people living in sub-Saharan Africa.  Among the reasons cited for restricted access to treatment – logistical issues, limited selection, inadequate production, prohibitive pricing – the economic incentives are often targeted by health activists as leading reasons that a third of the world’s population lacks access to essential drugs.  In the wake of the problematic World Trade Organization (WTO) Trade-Related Aspects of Intellectual Property Rights (TRIPS) Agreement, the 2001 Doha Declaration sought to reaffirm the commitment to public health buried in the original agreement.  A subsequent 2005 amendment to allow the use of compulsory licenses for export has, nearly a decade later, had disappointing reach, with only two instances of successful application.  With the lawmaking capabilities of the WTO hindered, scholars point to the WIPO as uniquely positioned to lead reform in the quest for a global intellectual property system responsive to change.  Backed by a formal agreement of cooperation with the WTO, the WIPO has the potential to create significant impact for the future of healthcare access within the TRIPS regime.  As delegates, you can advance the frontier of intellectual property scholarship by crafting an international solution that encourages research and development while safeguarding the basic right to healthcare.</p>
                </div>
            </div>
            
            <div id="adam-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Adam Ganik <small>&mdash; Historical General Assembly </small></h4>
                    <p>Dear Delegates,</p>
                    <p>I am very excited to welcome you to WorldMUN and to the Historical General Assembly in particular. My name is Adam Ganik and I am a sophomore Government concentrator with a secondary in Film/Video at Harvard. I participated extensively in MUN in high school and was an Assistant Director at Harvard MUN last year. This will be my first year doing WorldMUN and I am extremely excited to meet you all and discuss an extremely important and interesting topic. Outside of MUN, I make videos for The Harvard Crimson and I am a member of Students for Education.</p>
                    <p>The topic for the Historical General Assembly is the genocide in Rwanda. I chose it for a number of reasons which included its gravity, relative recency and the important role the UN played at the time.</p>
                    <p>I look forward to meeting you all and to having very interesting and fruitful discussions on the topic!</p>
                    <p>Best,</p>
                    <span>Adam Ganik</span><br/>
                    <span>Chair, Historical General Assembly</span><br/>
                    <span><a href="mailto:hga@worldmun.org" target="_blank">hga@worldmun.org</a></span>
                </div>
            </div>
            <div id="adam-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Historical General Assembly<br/><br/>Topic A - Genocide in Rwanda</h4>
                    <p>The Genocide in Rwanda is one of the most devastating abuses of human rights in history. By some estimates, it killed almost 20% of the Rwandan population. In only 100 days, between 500,000 and 1 million people were killed. The genocide continues to be viewed as one of the great failures of the international community and cast serious doubt on the effectiveness of the United Nations as a body meant to preserve peace and to prevent egregious human rights abuses. The Holocaust showed us that it can take years for nations to mobilize in opposition to human rights abuses and often only amid public support. In the Historical General Assembly, delegates will have to work only off of information that was available at the time and must represent their respective nations' positions while the genocide was occurring.</p>
                </div>
            </div>

            <div id="heather-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Heather Pickerell <small>&mdash; Security Council </small></h4>
                    <p>Dear Delegates,</p>
                    <p>Welcome to the Security Council! My name is Heather Pickerell, a junior concentrating in Social Studies at Harvard College. I am mixed American-Taiwanese from Hong Kong, where I studied at the German Swiss International School. My academics interest range from history and philosophy to government and economics. I am a major film buff who spends far too much time on film blogs and I also enjoy tennis and muay thai.</p>
                    <p>I have always been interested in International Relations and have been involved in MUN since high school. I was the Secretary General of Hong Kong Model United Nations 2011. I also previously staffed HMUN, HNMUN and WorldMUN and am a member of Harvard’s Model United Nations team. I am looking forward to directing the Security Council. The world we face is one of turmoil, unrest and war, and although we feel often powerless to act thousands of miles away from strife and conflict, our discussions and resolution-writing is the first step to fully grasping the issues at hand for a potential future in helping actually tackle these problems. </p>
                    <p>Please feel free to reach out to me with any questions about the committee or just to introduce yourself. I look forward to meeting you all at conference!</p>
                    <p>Sincerely,</p>
                    <span>Heather Lynn Pickerell</span><br/>
                    <span>Chair, Security Council</span><br/>
                    <span><a href="mailto:sc@worldmun.org" target="_blank">sc@worldmun.org</a></span>
                </div>
            </div>
            <div id="heather-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Security Council<br/><br/>Topic A - Terrorism and sectarian violence in Pakistan</h4>
                    <p>Pakistan has long faced difficulties with domestic terrorist organisations since the emergence of militant organisations during Soviet-Afghan war. However, the growing strength of these terrorist organisations in the past decade has led to an increased number of terrorist attacks within Pakistan, the export of terrorism to other countries and the emergence of sectarian violence. Terrorist attacks have become increasingly frequent and attacks against minority groups such as Akhazi Muslims, Christians and Shia Muslims have become more ferocious and deadly. The inability of the Pakistani government to clamp down on terrorist training camps has provided domestic terrorist organisations strongholds and recruiting grounds as well as training locations for terrorists from foreign locations. The Pakistani government’s inability to stabilize its country has both regional and international locations and demands the attention of the Security Council.</p>
                    <h4 class="popup-title">Topic B - Treatment of the Rohingya Muslims in Myanmar</h4>
                    <p>Muslims have long suffered discrimination at the hands of the majority-Buddhist population of Myanmar. However, the recent radicalisation of anti-Muslim movements led by Buddhist monks have led to a surge in extraordinary violence inflicted against the Rohingya ethnic group, who practice Islam, over the past year. The refusal of Myanmar's government or Myanmar's security forces to provide protection for the Rohingya Muslims has created a massive humanitarian crisis as refugees have flooded into Myanmar's bordering countries. The UN Security Council must act to provide basic protection for a long-targeted minority group.</p>
                </div>
            </div>
            <div id="dev-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Dev Patel <small>&mdash; Historical Security Council </small></h4>
                    <p>Dear Delegates,</p>
                    <p>Welcome to WorldMUN and the Historical Security Council! My name is Dev Patel, and I am extremely excited to meet all of you. I am a rising sophomore at Harvard College where I hope to concentrate in economics. I am originally from Denver, Colorado, though I have gone to school out on the East Coast since high school. I am passionate about international development and am particularly interested in Asia and Africa.</p>
                    <p>I have competed as a Model UN delegate since I was in the eighth grade and haven’t stopped since. I currently compete on Harvard’s travelling team as well as help staff HMUN and HNMUN, our conferences in Boston. But when I’m not raising placards and calling decorum, I love tutoring local children and reading the news. I also thoroughly enjoy watching movies (my favorite is a tie between “Mrs. Doubtfire” and “Ferris Bueller’s Day Off”) and writing for Harvard’s newspaper, The Crimson.</p>
                    <p>This committee promises exhilarating debate, tumultuous politics and thrilling crisis. I am directing the Historical Security Council on the Six-Day War because I think it is one of the most exciting, interesting and significant diplomatic issues in history. I will do everything I can to make sure you have the most exciting, action-packed Model U.N. experience you ever have. As you prepare for the conference, please don’t hesitate to reach out to me with any questions or concerns.</p>
                    <p>Sincerely,</p>
                    <span>Dev Patel</span><br/>
                    <span>Chair, Historical Security Council</span><br/>
                    <span><a href="mailto:hsc@worldmun.org" target="_blank">hsc@worldmun.org</a></span>
                </div>
            </div>
            <div id="dev-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Historical Security Council<br/><br/>Topic A - Six Day War</h4>
                    <p>In one of the most significant meetings of the Security Council in the body’s history, the resolution passed in the aftermath of the Six-Day War would remain a landmark document with far-reaching effects into the diplomatic relations of the region. Stepping back in time, delegates in the Historical Security Council will reassess the situation in 1967, entering a whirlwind of precarious international relations. Thrust into a state of turmoil, many Middle Eastern nations are left with no option but to turn to the international community for a semblance of peace, or else risk a bloody and destructive war. The United Nations Security Council, charged with maintaining a prolonged peace and addressing lingering concerns over Israel’s military engagements, must restore balance to region while setting the framework for diplomatic treaties for decades to come.</p>
                </div>
            </div>
            <div id="chilazi-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Michael Chilazi <small>&mdash; Cabinet of Gamal Abdel Nasser </small></h4>
                    <p>Dear Delegates,</p>
                    <p>I am unbelievably excited to head the Cabinet of Gamal Abdel Nasser at WorldMUN 2014. Hailing from the Middle East, I have taken a deep interest in the history and politics of the region. In my experience, few leaders stand out as being more influential in shaping the modern Arab state than Gamal Abdel Nasser: one of the first, and most powerful, Egyptian presidents that oversaw the transition between a monarchy serving colonial interests to a nationalist, autonomous Arab state seeking to assert itself on the global stage. Nasser’s leadership shaped the model of the Arab presidency up until the Arab Spring and is characterized by wide-scale changes to the Egyptian state and global crises that made Egypt the biggest blip on the Arab radar. I, Gamal Abdel Nasser, have entrusted my most capable military officials, bureaucrats, businessmen, and intellectuals with the responsibility of helping me shape the modern Egyptian state and navigate through countless crises, both domestic and foreign. </p>
                    <p>At Harvard I'm a senior studying Neurobiology with a minor in Global Health and Health Policy and dabbling on the side with Arabic. I have been involved in Model United Nations world since I was a small, helpless twelve-year-old standing on my tippy toes to reach the podium microphone, but I have loved my experience being on the other side of the dais (and being a few inches taller). Serving as the Under-Secretary-General for the Specialized Agencies for WorldMUN 2013, I am unbelievably excited to return to the SA as a chair for my last WorldMUN hurrah. I am looking forward to see many old friends from Melbourne, and hope some of you may be in my committee! Your current USG, Stefan Poltorzycki, is a dear friend of mine and I am honored to be serving in his organ. Outside of MUN at Harvard, I help to run an after-school tutoring program for kids in the Boston area where I have learned valuable lessons such as learning how to dougie and producing amateur (with emphasis) hiphop beats. In my free time, I love playing tennis, reading in nice places, traveling, and teaching myself how to DJ. Looking forward to seeing you all soon!</p>
                    <p>Sincerely,</p>
                    <span>Michael Chilazi</span><br/>
                    <span>Chair, Cabinet of Gamal Abdel Nasser</span><br/>
                    <span><a href="mailto:cabinet@worldmun.org" target="_blank">cabinet@worldmun.org</a></span>
                </div>
            </div>
            <div id="chilazi-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Cabinet of Gamal Abdel Nasser<br/><br/>Topic Area Summary</h4>
                    <p>The year is 1954. Gamal Abdel Nasser has successfully staged a coup leading him to be installed as Egypt’s second president. His charisma has gained him unparalleled love from the people, and with that love comes unquestioned authority to shape the Egyptian state as he sees fit. Nasser entered his presidency with profound social, political, and economic challenges, but with those challenges came unparalleled latitude with which he could shape the outcomes. Socially, under Nasser, the Egyptian state underwent large-scale bureaucratization whereby everything from oil to education was taken under the wing of the government. Politically, Nasser sought to orchestrate the political landscape to minimize opposition, a move that generated significant political tension and brooding that sought to topple him. And economically, Egypt suffered the consequences of a nationalized economy that secretly cooperated with a business elite, deepening the coffers of a few and marginalizing the masses. </p>
                    <p>And that’s just at home. Abroad, Egypt took great steps in influencing the world around it. From forming a united state with Syria, to asserting ownership over the Suez canal, to leading a cooperative invasion of Israel, global powers soon realized that Egypt was no longer a powerless colonial state, but a force to be reckoned with. And with the Cold War brewing between the US and the Soviets, Egypt found itself in a virtual tug of war as both superpowers attempted to exert their influence in the region. In such a dynamic and definitive time period, Nasser will rely on his inner circle to navigate through these challenges, assert his leadership over the state, and find success for his country. Let it be known that the events of our committee may not unfold identically to history’s path. Your actions and voices will generate new outcomes to crises. Most importantly, the cabinet’s decisions will see ripples not only in Egypt, but also across the Arab world. As the most powerful Arab state at the time, all eyes rest on Egypt. Ensure we put on a good show.</p>
                </div>
            </div>
            <div id="eva-harvey-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Eva Harvey <small>&mdash; Committee of Public Safety, 1793 </small></h4>
                    <p>Dear Delegates,</p>
                    <p>It is my pleasure and delight to welcome you to the Public Safety Committee of the French Revolution at WorldMUN 2014! My name is Eva Harvey and I am a junior at Harvard studying Chemistry. I am originally from Cork, Ireland, and now live in Paris, France. I have been involved in Model UN throughout my time at college and have participated in numerous crisis committees as both a delegate and a staffer. I am incredibly excited to be your Chair and am looking forward to creating an engaging and exhilarating committee. I cannot wait to meet and get to know you all. In the meantime, feel free to get in touch!</p>
                    <p>Sincerely,</p>
                    <span>Eva Harvey</span><br/>
                    <span>Chair, Committee of Public Safety 1793</span><br/>
                    <span><a href="mailto:cps@worldmun.org" target="_blank">cps@worldmun.org</a></span>
                </div>
            </div>
            <div id="eva-harvey-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Committee of Public Safety, 1793 <br/><br/>Topic A - Public Safety Committee of the French Revolution</h4>
                    <p class="citation">"Eleven armies to direct, the weight of all of Europe to bear; everywhere there are traitors to unmask, emissaries bribed by the gold of foreign powers to foil, unfaithful administrators to watch over, to pursue; everywhere we must level the obstacles and hindrances to the execution of the wisest measures; ...these are our functions."</p>
                    <p>This is Robespierre’s own description of the turmoil facing the twelve members of the Committee of Public Safety. The Committee, constituted by decree by the National Convention in April 1793 was in effect the governing body of France during the height of the revolution’s most radical, tumultuous and violent phase. Not only was France threatened by war but the Committee was also threatened by counter-revolution. In response the Revolutionary ideals of equality, democracy and virtue paradoxically became entwined with that of terror. The Reign of Terror, as described by the writer Chamfert, was a time when “we are brothers” became “be my brother or I will kill you.”</p>
                    <p>I look forward to seeing how you choose to deal with the many challenges of this chaotic time period. I encourage you to be creative in your solutions while also remaining cognizant of the deeper ideological dimensions of the Revolution. As a member of the Committee of Public Safety you will have the opportunity to participate in the greatest of all revolutions and make your mark on one of the most critical events in European history. </p>
                </div>
            </div>
            <div id="ishani-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Ishani Premaratne <small>&mdash; Interpol </small></h4>
                    <p>Dear Delegates,</p>
                    <p>Welcome to the 22nd session of WorldMUN! My name is Ishani Premaratne and I am excited to serve as the chair of the International Criminal Police Organization, fondly known as INTERPOL. Over the course of the next few days, we will launch into intense debate and discussion about organ trafficking and bioterrorism around the world as we endeavor to find sustainable solutions to which our member countries can agree.</p>
                    <p>As for me, I am a junior on the pre-medical track at Harvard, and my studies are focused in Anthropology and Global Health and Health Policy. I am also the (mostly) proud member of a duo here at school—and by that I mean, I’m a twin and feel fortunate that my sister is attending Harvard along with me. Besides twinship, I am also an avid figure skater and teach lessons here at Harvard. I love to write and have written for our main college newspaper, The Harvard Crimson, as well as USA Today and other publications. I’ve spent a summer in Tanzania working in global health and have also co-founded a social enterprise in my parents’ home country of Sri Lanka where I work to empower women by connecting them to job opportunities in some of the most impoverished regions of the country. For fun, I love to travel and then scrapbook my experience afterwards in order to preserve memories from different locales around the world in a non-instragrammed, non-digital form (I figure Facebook won’t be around forever).</p>
                    <p>I participated in Model UN for the first time in middle school and am thrilled to be joining WorldMUN this year! I am very excited to meet you all and encourage you to reach out to me in advance of the conference with any questions or concerns that you may have. I look forward to meeting you all very soon.</p>
                    <p>Sincerely,</p>
                    <span>Ishani Premaratne</span><br/>
                    <span>Chair, Interpol</span><br/>
                    <span><a href="mailto:interpol@worldmun.org" target="_blank">interpol@worldmun.org</a></span>
                </div>
            </div>
            <div id="ishani-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Interpol<br/><br/>Topic A - Organ Trafficking</h4>
                    <p>In recent years, the increasing shortage of organs and organ donors worldwide has led to an expansion in the illegal removal and sale of body organs on the black market, a practice known as organ trafficking. According to the UN Global Initiative to Fight Human Trafficking (GIFT), victims of organ trafficking can be categorized based on the varying levels of consent given by the individuals whose organs are sold. While some may be tricked or deceived into giving their organs, others willingly sell their organs on the black market or even have them forcibly removed by a third party. The organ market involves multiple players, including organ brokers, hospital and clinic staff, and organ transporters who all stand to profit from this illegal trade. The conditions which create victimhood, the rise of ‘transplant tourism,’ the legal protections afforded to organ donors (or the lack thereof), and the role of international regulatory bodies in stemming this trade are all aspects of this topic that delegates should investigate. From Moldova to Egypt, this illegal trade and its corollary effects persist and threaten the lives of both the donor and the recipient. What incentives might be provided to dissuade traffickers from participating in this trade? What is the role of consent and can international law arbitrate it?</p>
                    <h4 class="popup-title">Topic B - Bioterrorism</h4>
                    <p>Bioterrorism makes use of chemical, biological, radiological, nuclear and explosives (CBRNE) materials, and is considered to be one of the worst types of terrorist attacks. The main points of discussion for this topic area will not center around the level of incidence of bioterrorism, but rather, the significant national and global implications of any single, successful attack. INTERPOL oversees a CBRNE Terrorism Prevention Programme for the expressed purpose of mitigating the incidence and potency of different aspects of CBRNE-related terrorism. The biological agents—such as bacteria, viruses, and fungi—are the modern artillery used by those who wish to inflict widespread fear without instilling great chaos at the outset. Biomaterials are also increasingly cheaper and more easily attainable than conventional nuclear or chemical weapons. Unlike conventional forms of terrorism, the additional challenge with bioterrorism is the ease with which pathogens and toxins can leave the locally affected area and become transnational problems. The element of covert transmission poses a significant threat as bioterrorism becomes increasingly prevalent. Issues to be considered include the sophistication and efficacy of prevention mechanisms such as monitoring systems, disease reporting infrastructure, vaccines, and transportation networks, among others. Delegates should additionally think about the specific types of pathogens that are most viable for acts of bioterrorism and how easily these can be obtained, the mechanisms of disease detection, and government regulations that might be able to stymie the ability of bioagents to cross borders.</p>        
                </div>
            </div>
            <div id="richard-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Richard Ebright <small>&mdash; Pandemic Response Team </small></h4>
                    <p>Dear Delegates,</p>
                    <p>It is with great pleasure that I welcome you to the Pandemic Response Team of Harvard World Model United Nations 2014! My name is Richard Ebright, and I am thoroughly excited to serve as your Chair for what will certainly be the most stimulating and substantive committee at WorldMUN this year.</p>
                    <p>Hailing originally from New Jersey, I am currently a senior at Harvard College, majoring in Chemical and Physical Biology. Despite my university studies, I am very much interested in international relations. This will be my fourth WorldMUN, and my thirteenth Model UN conference staffing experience. I Chaired the Third Party Actors in Singapore, was the USG for Operations in Vancouver, and Chaired the Libyan National Transitional Council in Melbourne, and I am excited to be Chairing again for my final WorldMUN. Outside of WorldMUN, I am the Secretary-General of HNMUN, a staff member for HMUN, and part of Harvard’s traveling Model UN team. I also am heavily involved in cancer research and breakdancing at Harvard.</p>
                    <p>At WorldMUN 2014, we, the Health Ministers of the developed world, will be meeting to discuss the recent, fictional outbreak of a novel pandemic threat in Asia. Set in the present day, this committee will be discussing how to address this novel pandemic, in light of the successes and failings of international response to SARS, H1N1 influenza, and H5N1 influenza in the past 15 or so years. International pandemic preparation is wholly inadequate, as has been shown time and time again, and we will, of course, have to consider the consequences of our actions (or inactions). This committee will be action packed and substantively oriented, so brush up on your knowledge of international disease policies, and be prepared for intense and rapid debate. A cursory understanding of the science behind pandemics and disease in general will be very helpful, and I will look favorably upon educated arguments grounded in science; however, so as not to be exclusionary, policy and international action will be the focus. Regardless of your science background, come with an open mind, and if you have any questions during your research and preparation, please feel free to contact me. I look forward to meeting you all in person in March!</p>
                    <p>Sincerely,</p>
                    <span>Richard Ebright</span><br/>
                    <span>Chair, Pandemic Response Team</span><br/>
                    <span><a href="mailto:prt@worldmun.org" target="_blank">prt@worldmun.org</a></span>
                </div>
            </div>
            <div id="richard-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Pandemic Response Team<br/><br/>Topic Area Summary</h4>
                    <p>It is September 2014, and the world’s citizens are going about as if nothing were happening. However, Ministers, they are mistaken. First observed in 2012, Middle East Respiratory Syndrome (MERS) has been spreading over the last few years. Recently, dozens of cases have popped up in Saudi Arabia – now, we have no idea what is causing this sudden increase in cases, but we fear that the coronavirus may be becoming more volatile. </p>
                    <p>At the present moment, the general public does not seem to be particularly concerned – this airborne virus has been around for years, without much effect on most countries. However, the Hajj is coming up. The largest gathering of people in the world, the Hajj brings more than 3 million citizens from around the world to Saudi Arabia, and we are concerned that this could turn MERS into a global pandemic. Perhaps the recent deaths from MERS are nothing and perhaps it will pass – but perhaps it won’t. It is clear that, as it stands, international efforts to address pandemic threats are lacking, and I urge you all to be thinking of how to remedy the issue of international pandemic preparedness – even as we deal with the pandemic threat at hand. Good luck, and the fate of the world rests in your hands.</p>
                </div>
            </div>
            <div id="arthur-bio">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Arthur Nguyen <small>&mdash; Third Party Actors </small></h4>
                    <p>Dear Delegates,</p>
                    <p>Welcome to the WorldMUN 2014’s TPA! As Chair for the TPA, I can assure you that this will be one of the most memorable and exciting committees that you will ever take part in. The TPA fuses the Press Corps with Non-Governmental Organizations. Following in the footsteps of last year’s excellent WorldMUN Press Corps, the TPA will accomplish this by integrating the collaborative team framework of Press Corps with the unique spirit of NGOs. As a result, I hope TPA will continue to be one of the most innovative and fast-paced committees that WorldMUN has to offer.</p>
                    <p>I am a junior at Harvard College studying Human Developmental and Regenerative Biology with a secondary in Global Health and Health Policy. Originally from California, I grew up in Saint Paul, Minnesota, where I get the pleasure of experiencing the four seasons. When not caught in meetings and late-night study sessions, I find time to savor life’s subtleties. Despite being a pre-med at Harvard, I continue my passion for tennis, rallying whenever I find time, while expanding my interests. I have embraced a new penchant for archery and have immersed myself in the refreshing and intellectually stimulating world of MUN. Moreover, I love to travel, experience new cultures, and revel in music.</p>
                    <p>With the creative freedom, independence, pace, and collaboration TPA has to offer, I hope to facilitate the most satisfying delegate experience at WorldMUN 2014. From being a news reporter for the New York Times and the BBC and holding heated press conferences and publishing controversial articles, to representing Médecins Sans Frontières and CARE International and participating in committee caucuses, I guarantee a fulfilling role for every delegate. If want a change of pace in MUN, and an exhilarating and stimulating experience, the TPA will provide. I look forward to not only hearing your innovative ideas, but also seeing your creativity and enthusiasm. For the time being, I encourage you to familiarize yourself with the possible news agencies and NGOs that will be present at WorldMUN 2014. While the study guide will provide you the substantive foundation for conference, it is by no means your only resource, and I recommend you to explore additional resources. Lastly, delegates, brace yourselves for an unforgettable and exhilarating TPA experience at WorldMUN 2014.</p>
                    <p>Sincerely,</p>
                    <span>Arthur Nguyen</span><br/>
                    <span>Chair, Third Party Actors</span><br/>
                    <span><a href="mailto:tpa@worldmun.org" target="_blank">tpa@worldmun.org</a></span>
                </div>
            </div>
            <div id="arthur-committee">
                <div class="pop-committee-description">
                    <h4 class="popup-title"><i class="icon-check"></i> Third Party Actors <br/><br/>Topic Area Summary</h4>
                    <p>For those who participated in the Press Corps at Melbourne 2013, prepare yourself for yet another engaging and interactive delegate experience. To those who haven’t experienced the thrill and creative spirit of the TPA, be ready to immerse yourself in one of two possible venues TPA has to offer. In the spirit of past years’ Press Corps, you will serve as integral team members in world-renowned news agencies, writing and submitting a mélange of content to be published on the official WorldMUN Press Corps website. From editorials and breaking news releases to video blogs and photo essays, you and your fellow delegates simulate the inner-workings of the press. Alternatively, as representatives of NGOs, you will play an essential role in shaping and shifting in-committee debates. These NGOs often serve as one of the most influential pieces to drafting effective resolutions and swaying tenacious delegates.</p>
                </div>
            </div>
    	</div>
    </div>
	<?php require("footer.php") ?>