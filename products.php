<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Savon Care | Happy & Healthy | Products</title>
    <meta content="" name="description">

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/image/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/image/favicon.png">
  <link rel="shortcut icon" href="./assets/image/favicon.png" type="image/x-icon">

    <meta content="" name="keywords">
   <!-- ======= Css files Include ======= -->
    <?php include_once 'css-files.php' ?>
    <!-- ======= Css files Include ======= -->
  </head>
  <body>
    <!-- ======= Header start ======= -->
    <?php include_once 'header-menu.php' ?>
    <!-- ======= Header end ======= -->
    <!-- ======= bredcrumbs start======= -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .accordion {
            flex: 1 1 25%;
            padding: 20px;
            /*background-color: #fff;*/
            border-right: 1px solid #ddd;
            box-sizing: border-box;
        }

        .accordion-item {
            border-bottom: 1px solid #ddd;
        }

        .accordion-item button {
            width: 100%;
            padding: 15px;
            text-align: left;
            background: none;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1.2em;
            transition: background 0.3s ease;
        }

        .accordion-item button:hover,
        .accordion-item button.active {
            background-color: #105BAB;
            color: white;
        }

        .accordion-content {
            display: none;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .content {
            flex: 1 1 75%;
            padding: 20px;
            box-sizing: border-box;
        }

        .service-block {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-block img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .service-block h3 {
            margin-top: 10px;
            font-size: 1.5em;
            color: #333;
        }

        .service-block p {
            font-size: 1em;
            color: #666;
            line-height: 1.6;
            text-align: left;
        }

        .service-block ul {
            text-align: left;
            margin-top: 10px;
            padding-left: 20px;
            font-size: 1em;
            color: #666;
            line-height: 1.6;
        }

        .service-block ul li {
            margin-bottom: 10px;
        }
       
       .accordion-main{
           background:white;
       }
       
    </style>
</head>
<body>
  <!-- ======= Header start ======= -->
  <?php include_once 'header-menu.php' ?>
  <!-- ======= Header end ======= -->

  <!-- ======= Breadcrumbs start======= -->
    <section class="products-breadcrumbs">
        <div class="banner">
            <div class="b-title apid">
                <h3>Our Services</h3>
            </div>
        </div>
    </section>
    <!-- ======= Breadcrumbs end ======= -->
  <div class="container">
      <div class="accordion">
          <div class="accordion-main">
              
         
        <div class="accordion-item">
          <button onclick="showContent('staffing-solutions')">Staffing solutions (Manpower Support)</button>
          <div id="staffing-solutions" class="accordion-content">
            <p>Provides temporary or permanent staffing solutions to companies, ensuring that they have the necessary workforce to meet their operational needs. This can include recruiting, hiring, training, and managing staff.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('payroll-management')">Payroll management</button>
          <div id="payroll-management" class="accordion-content">
            <p> Manages all aspects of employee compensation, including salary payments, tax withholdings, deductions, and compliance with labor laws. This service ensures accurate and timely payroll processing.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('housekeeping')">Cleaning – Housekeeping Services</button>
          <div id="housekeeping" class="accordion-content">
            <p>Offers professional cleaning services for offices, commercial buildings, and residential properties. Services include routine cleaning, deep cleaning, and maintenance of cleanliness and hygiene standards.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('security')">Security</button>
          <div id="security" class="accordion-content">
            <p>Provides security personnel and systems to protect properties, assets, and individuals. This can include on-site guards, surveillance systems, and security audits.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('pest-control')">Pest control & Waste disposal</button>
          <div id="pest-control" class="accordion-content">
            <p>Delivers pest management services to control and eliminate pests such as insects, rodents, and termites. Additionally, it includes waste disposal services to manage and dispose of various types of waste safely and efficiently.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('furniture-equipment')">Furniture and equipment</button>
          <div id="furniture-equipment" class="accordion-content">
            <p>Supplies and maintains office furniture and equipment. This can include sourcing, delivery, installation, and repair services to ensure that the office environment is functional and comfortable.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('reception-services')">Reception services</button>
          <div id="reception-services" class="accordion-content">
            <p>Provides professional receptionists to manage front-desk operations, greet visitors, handle phone calls, and perform administrative tasks. This service ensures smooth and efficient front-office operations.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('space-management')">Space management</button>
          <div id="space-management" class="accordion-content">
            <p>Manages the effective use of office space, including planning, allocation, and optimization. This service helps in creating a productive and comfortable work environment.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('facade-cleaning')">Façade Cleaning</button>
          <div id="facade-cleaning" class="accordion-content">
            <p>Offers specialized cleaning services for building exteriors, including windows, walls, and other structural elements. This service helps maintain the aesthetic appeal and cleanliness of buildings.
</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('carpet-shampooing')">Carpet & Chair Shampooing</button>
          <div id="carpet-shampooing" class="accordion-content">
            <p>Provides professional cleaning for carpets and upholstered furniture. This service helps in maintaining hygiene and prolonging the life of carpets and chairs.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('floor-polish')">Floor Polish</button>
          <div id="floor-polish" class="accordion-content">
            <p>Offers polishing and maintenance services for various types of flooring, including wood, marble, and tile. This service enhances the appearance and durability of floors.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('event-management')">Event Management</button>
          <div id="event-management" class="accordion-content">
            <p> Plans and executes corporate events, meetings, conferences, and other gatherings. Services include event planning, coordination, logistics, and on-site management.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('janitorial')">Janitorial</button>
          <div id="janitorial" class="accordion-content">
            <p>Provides routine cleaning and maintenance services for buildings and facilities. This includes tasks such as sweeping, mopping, dusting, and trash removal to ensure a clean environment.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('staffing-solutions-2')">Staffing solutions</button>
          <div id="staffing-solutions-2" class="accordion-content">
            <p>Similar to "Staffing Solutions (Manpower Support)," this service focuses on providing the right workforce for various business needs, including temporary, permanent, and contract staffing.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('production-support')">Production support services</button>
          <div id="production-support" class="accordion-content">
            <p>Offers support services for manufacturing and production operations. This can include supply chain management, equipment maintenance, and process optimization.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('car-park-management')">Car park Management</button>
          <div id="car-park-management" class="accordion-content">
            <p>Manages parking facilities, ensuring efficient use of space, security, and convenience for users. Services can include parking lot design, management, and maintenance.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('security-coverage')">Security coverage</button>
          <div id="security-coverage" class="accordion-content">
            <p>Provides comprehensive security solutions, including surveillance, access control, and emergency response. This service ensures the safety and security of properties and individuals.</p>
          </div>
        </div>
        <div class="accordion-item">
          <button onclick="showContent('warehouse-management')">Warehouse Management</button>
          <div id="warehouse-management" class="accordion-content">
            <p>Manages warehouse operations, including inventory control, storage, and logistics. This service ensures efficient handling, storage, and distribution of goods.</p>
          </div>
        </div>
         </div>
      </div>

      
        <div class="content">
            
            
            <h3>Pest Control Services</h3>
            
        
            <div class="service-block">
    <img src="./assets/img/pest/cockroach.png" alt="Cockroach Pest Control">
    <h3>Cockroach Pest Control</h3>
    <p>Cockroach pest control services are crucial for maintaining a healthy and hygienic environment in both residential and commercial spaces. These services aim to eliminate cockroach infestations and prevent future occurrences.</p>
    <p>Treatment Methods:</p>
    <ul>
        <li>Gel Baiting: Application of gel baits in key areas to attract and eliminate cockroaches.</li>
        <li>Residual Spraying: Use of insecticide sprays to create a barrier and kill cockroaches on contact.</li>
        <li>Traps: Placement of sticky traps to monitor and reduce cockroach populations.</li>
    </ul>
    <p>Benefits:</p>
    <ul>
        <li>Effective elimination of cockroach infestations.</li>
        <li>Reduces health risks associated with cockroach-borne diseases.</li>
        <li>Long-term prevention of cockroach re-infestations.</li>
        <li>Safe and environmentally friendly treatment options.</li>
    </ul>
</div>
<div class="service-block">
    <img src="./assets/img/pest/commercial.png" alt="Commercial Pest Control">
    <h3>Commercial Pest Control</h3>
    <p>Commercial pest control services are tailored to the unique needs of businesses and commercial properties. These services focus on preventing and eliminating pests that can disrupt business operations and compromise hygiene.</p>
    <p>Treatment Methods:</p>
    <ul>
        <li>Integrated Pest Management (IPM): Comprehensive approach combining sanitation, exclusion, and treatment.</li>
        <li>Regular Inspections: Scheduled inspections to detect pest problems early.</li>
        <li>Customized Treatment Plans: Tailored pest management solutions based on specific business requirements.</li>
    </ul>
    <p>Benefits:</p>
    <ul>
        <li>Protects reputation and maintains business continuity.</li>
        <li>Complies with health and safety regulations.</li>
        <li>Minimizes the risk of product contamination.</li>
        <li>Provides peace of mind to employees and customers.</li>
    </ul>
</div>
<div class="service-block">
    <img src="./assets/img/pest/residential.png" alt="Residential Pest Control">
    <h3>Residential Pest Control</h3>
    <p>Residential pest control services are essential for homeowners to protect their families and properties from pests. These services include proactive measures to prevent infestations and effective treatments to eliminate existing pests.</p>
    <p>Treatment Methods:</p>
    <ul>
        <li>Barrier Treatments: Application of insecticides around the perimeter of the home to create a protective barrier.</li>
        <li>Interior Spraying: Targeted spraying of insecticides inside the home to eliminate pests hiding in cracks and crevices.</li>
        <li>Baiting Systems: Installation of bait stations to attract and eliminate pests safely.</li>
    </ul>
    <p>Benefits:</p>
    <ul>
        <li>Creates a safe and comfortable living environment.</li>
        <li>Prevents damage to property and belongings.</li>
        <li>Improves indoor air quality by reducing allergens from pests.</li>
        <li>Provides peace of mind to homeowners.</li>
    </ul>
</div>



            <div class="service-block">
                <img src="./assets/img/pest/termite.png" alt="Termite Control">
                <h3>Termite Control</h3>
                <p>Termite control services are essential to protect buildings from termite damage. This service includes both pre-construction and post-construction treatments to ensure comprehensive protection against termites.</p>
                <p>Treatment Methods:</p>
                <ul>
                    <li>Soil Treatment: Application of termiticides to the soil before construction begins.</li>
                    <li>Drilling and Injection: Treatment of existing termite infestations by drilling holes and injecting chemicals into affected areas.</li>
                </ul>
                <p>Benefits:</p>
                <ul>
                    <li>Prevents costly termite damage.</li>
                    <li>Long-lasting protection for homes and buildings.</li>
                    <li>Customized treatment plans based on property needs.</li>
                </ul>
            </div>

            <div class="service-block">
                <img src="./assets/img/pest/rodent.png" alt="Rodent Control">
                <h3>Rodent Control</h3>
                <p>Rodents such as house mice and roof rats can cause significant damage to property and pose health risks by contaminating food and spreading diseases.</p>
                <p>Treatment Methods:</p>
                <ul>
                    <li>Traps and Baits: Placement of traps and baits in strategic locations to capture and eliminate rodents.</li>
                    <li>Chemical Treatments: Use of rodenticides to control rodent populations.</li>
                </ul>
                <p>Benefits:</p>
                <ul>
                    <li>Effective removal of rodents from residential and commercial properties.</li>
                    <li>Reduces health risks associated with rodent infestations.</li>
                    <li>Prevents damage to property and belongings.</li>
                </ul>
            </div>

            <div class="service-block">
                <img src="./assets/img/pest/mosquito.png" alt="Mosquito Control">
                <h3>Mosquito Control</h3>
                <p>Mosquitoes are carriers of diseases such as malaria, dengue, and Zika virus. Effective mosquito control is essential to protect families and communities from these health risks.</p>
                <p>Treatment Methods:</p>
                <ul>
                    <li>Fogging: Application of insecticide fog to kill adult mosquitoes in outdoor areas.</li>
                    <li>Larvicide Treatments: Treatment of standing water sources to prevent mosquito larvae from developing.</li>
                </ul>
                <p>Benefits:</p>
                <ul>
                    <li>Reduces the risk of mosquito-borne diseases.</li>
                    <li>Safe and effective methods for mosquito control.</li>
                    <li>Improves quality of life by reducing mosquito nuisance.</li>
                </ul>
            </div>

            <div class="service-block">
                <img src="./assets/img/pest/bed-bug.png" alt="Bed Bug Control">
                <h3>Bed Bug Control</h3>
                <p>Bed bugs are parasitic insects that feed on human blood and are often found in mattresses, furniture, and bedding. Effective bed bug control is crucial to eliminate infestations and prevent their spread.</p>
                <p>Treatment Methods:</p>
                <ul>
                    <li>Heat Treatment: Application of high temperatures to kill bed bugs and their eggs.</li>
                    <li>Chemical Treatments: Use of insecticides to treat infested areas.</li>
                </ul>
                <p>Benefits:</p>
                <ul>
                    <li>Complete elimination of bed bugs and their eggs.</li>
                    <li>Restores comfort and peace of mind.</li>
                    <li>Prevents re-infestation with regular monitoring.</li>
                </ul>
            </div>

            <div class="service-block">
                <img src="./assets/img/pest/bird.png" alt="Bird Control">
                <h3>Bird Control</h3>
                <p>Birds such as pigeons and sparrows can become pests when they nest in or around buildings, causing damage and health risks from droppings and nesting materials.</p>
                <p>Treatment Methods:</p>
                <ul>
                    <li>Netting and Spikes: Installation of physical barriers to prevent birds from roosting and nesting.</li>
                    <li>Humane Deterrents: Use of sound and visual deterrents to discourage birds from nesting.</li>
                </ul>
                <p>Benefits:</p>
                <ul>
                    <li>Protects buildings from damage caused by bird nests and droppings.</li>
                    <li>Reduces health risks associated with bird droppings.</li>
                    <li>Humane methods to deter birds without harm.</li>
                </ul>
            </div>

            <div class="service-block">
                <img src="./assets/img/pest/fly.png" alt="Fly Control">
                <h3>Fly Control</h3>
                <p>Flies are common pests that can spread diseases by contaminating food and surfaces with bacteria and pathogens.</p>
                <p>Treatment Methods:</p>
                <ul>
                    <li>UV Light Traps: Use of ultraviolet light traps to attract and capture flies.</li>
                    <li>Insecticide Sprays: Application of insecticides in areas where flies are active.</li>
                </ul>
                <p>Benefits:</p>
                <ul>
                    <li>Reduces the risk of disease transmission.</li>
                    <li>Improves hygiene and sanitation.</li>
                    <li>Creates a more comfortable environment.</li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <!-- End Footer -->
    <!-- ==============  Footer  start ============ -->
   <?php include_once 'footer.php' ?>
   <script>
      function showContent(id) {
        var content = document.getElementById(id);
        var button = content.previousElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
          button.classList.remove("active");
        } else {
          content.style.display = "block";
          button.classList.add("active");
        }
      }
    </script>
    <!-- ==============  Footer  End ============ -->
  </body>
  </html>