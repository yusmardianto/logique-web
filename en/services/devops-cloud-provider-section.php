<!-- <style>
    #providers option {
        width: 30px;
    }
</style> -->
<section>
        <div class="container__">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabcontainer">
                        <div class="tab hidden-sm hidden-xs" style="max-width: 100%">
                            <button style="width: 33%;" class="tablinks font-black active" onclick="openProvider(event, 'Amazon')">
                                Amazon Web Services                            
                            </button>
                            <button  style="width: 33%;" class="tablinks font-black" onclick="openProvider(event, 'Google')">                                
                                Google Cloud Platform
                            </button>
                            <button  style="width: 33%;" class="tablinks font-black" onclick="openProvider(event, 'Alibaba')">
                                Alibaba Cloud
                            </button>
                        </div>

                        <div class="tab visible-sm visible-xs">
                            <select class="custom__mini-tab" onclick="openProvider(event, event.target.value)" name="providers" id="providers">
                                <option value="Amazon"><b>Amazon Web Services  </b></option>
                                <option value='Google'><b>Google Cloud Platform </option>
                                <option value='Alibaba'> <b>Alibaba Cloud </b></option>                            
                            </select>
                        </div>

                        <!-- TAB CONTENT AMAZON WEB SERVICES -->
                        <div id="Amazon" class="tabcontent" style="display: block;"> 
                            <div class="row">
                                <div class="col-md-6">                                    
                                    <img class="mt-7 w-full-sm" src="../../layanan/assets/img/img-devops/amazon-logo-description.webp" alt="AWS badge">                                    
                                </div>
                                <div class="col-md-6 col-sm-12" >
                                    <h3 class="mt-7 font-black text-4xl-sm ">1. Amazon Web Services (AWS)</h3>
                                    <p class=" mt-3-sm">
                                        Amazon Web Services (AWS) is one of the largest and most leading cloud providers operating within the market. Many of our clients have chosen to use cloud servers from AWS because of their ability to provide flexible, reliable, scalable, easy to use, and cost-effective cloud computing solutions. To date, AWS has been highly trusted by a variety of businesses so as to support their needs in the running of critical applications that require a high level of availability. LOGIQUE itself is currently a certified AWS partner operating out of Indonesia.
                                        Some featured products from AWS are as follows:
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/cloud-data.webp" alt="Amazon Elastic Compute Cloud (Amazon EC2)">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4 class="font-black mt-3-sm ">Amazon Elastic Compute Cloud (Amazon EC2)</h4>
                                    <p >
                                        The Amazon EC2 is a web service that provides features such as a high level of security and resizable computing within the cloud. The Amazon EC2 is also a very comprehensive computing platform that offers a wide selection of processors, storage, networking, and operating systems. Another advantage of this product is that it uses the fastest cloud processor currently available, also utilizing an ethernet network of 400 Gbps.
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/database-storage.webp" alt="Amazon Relational Database Service (RDS)">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black mt-3-sm ">Amazon Relational Database Service (RDS)</h4>
                                    <p>
                                        This is a website service that aims to simplify the process of setting up, operating, and scaling relational databases within the AWS cloud. This service is cost-effective and utilizes a resizable compute capacity in order to manage standard relational databases. RDS can also be used to manage general database administration tasks.
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/apploadbalancer.webp" alt="Load Balancer">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black mt-3-sm ">Application Load Balancer (ALB)</h4>
                                    <p>
                                        Application Load Balancers (ALB) can serve to simplify and increase the security of your applications. ALB can also ensure that the latest SSL/TLS ciphers and protocols will be appropriately used at all times.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/firewall.webp" alt="Firewall">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black mt-3-sm ">Web Application Firewall (WAF)</h4>
                                    <p>
                                        The AWS Web Application Firewall is a web application firewall that can serve to  protect your web based application or APIs from common web exploits and bots which can potentially affect your application’s availability, compromise security, or consume an excessive amount of resources. This AWS WAF will hand control over to you as to how traffic will be able to reach your application, as well as allow you to be able to create new security rules that regulate bot traffic, as well  as block methods of infection such as with a SQL injection or cross-site scripting.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/vpn.webp" alt="VPN">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black mt-3-sm ">Virtual Private Network (VPN)</h4>
                                    <p>
                                        The AWS Virtual Private Network can be used to establish secure connections between on-premises networks, remote offices, client devices, and the AWS global network. If you are interested in using a VPN, AWS provides you with two specific services, namely AWS Site-to-Site VPN and AWS Client VPN. Each of the mentioned services offer a secure cloud VPN solution in order to protect your network traffic.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/servers.webp" alt="Server">                                    
                                </div>
                                <div class="col-md-10">
                                    <h4  class="font-black mt-3-sm ">Amazon Simple Storage Service (Amazon S3)</h4>
                                    <p>
                                        Amazon S3 is an AWS service that features an object storage function which offers a high level of scalability, data availability, security, and performance. This service can be used by customers from a variety of industries in order to store and protect various important articles of data for a number of reasons, some of which include data lakes, websites, mobile applications, backup and recovery, archiving and enterprise applications, among others.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- TAB CONTENT GOOGLE CLOUD PLATFORM -->
                        <div id="Google" class="tabcontent">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="mt-7 w-full-sm " src="../../layanan/assets/img/img-devops/gcp-logo.webp" alt="GCP Logo">
                                </div>
                                <div class="col-md-6">                                  
                                    <h3 class="mt-7 font-black text-4xl-sm ">2. Google Cloud Platform (GCP)</h3>
                                    <p  class=" mt-3-sm">
                                        The Google Cloud Platform is a cloud computing service provided by Google. GCP offers cloud solutions that allow your business to modernize and develop faster within any environment.                                                                                
                                    </p>    
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/gcp-cloud-storage.webp" alt="GCP Cloud Storage">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm ">Cloud Storage</h4>
                                    <p>
                                        This storage presents a safe, durable, and scalable object storage area. Cloud storages allow your business to be able to store certain types of data in various sizes.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/gcp-compute-engine.webp" alt="GCP Compute engine">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm ">Compute Engine</h4>
                                    <p>
                                        This is a secure and customizable GCP computing service that allows you to create and run virtual machines within Google's infrastructure. Some types of virtual machines include E2, N2, N2D, N1, M2, M1, and others.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/gcp-cloud-server.webp" alt="GCP cloud server">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm ">Cloud SDK</h4>
                                    <p>
                                        The Cloud SDK consists of tools and libraries used for interacting with Google Cloud products and services.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/gcp-cloud-sql.webp" alt="GCP cloud sql">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm">Cloud SQL</h4>
                                    <p>
                                        A service that manages relational databases for MySQL, PostgreSQL, and SQL Servers. Cloud SQL can work automatically in order to ensure that your database is reliable, secure, and scalable, thereby allowing your business to continue to run without interruption.
                                    </p>
                                </div>
                            </div>
                                                       
                        </div>

                        <!-- TAB CONTENT ALIBABA CLOUD-->
                        <div id="Alibaba" class="tabcontent">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="mt-7  w-full-sm " src="../../layanan/assets/img/img-devops/alibaba-logo-description.webp" alt="Alibaba Logo">
                                </div>
                                <div class="col-md-6">                                  
                                    <h3 class="mt-7 font-black text-4xl-sm ">3. Alibaba Cloud</h3>
                                    <p  class=" mt-3-sm">
                                        Services from Alibaba Cloud are also provided by LOGIQUE in order to meet the requirements of Indonesian cloud servers. Alibaba Cloud provides reliable and secure cloud computing methods and data processing services for thousands of companies, developers, and government organizations within more than 200 countries and regions across the world. Apart from having proven track record and capabilities as well as a high level of reliability, Alibaba Cloud also has a strong presence within Asia.
                                    </p> 
                                </div>
                            </div>       
                            
                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/alibaba-elastic.webp" alt="alibaba-elastic">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm">Elastic Compute Service (ECS)</h4>
                                    <p>
                                        Alibaba Elastic Compute Service (ECS) provides a fast working memory as well as the latest Intel CPUs so as to assist you with running your applications. This ECS will also provide results quickly, and with a low level of latency.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/alibaba-sas.webp" alt="alibaba-sas">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm">Simple Application Server (SAS)</h4>
                                    <p>
                                        This service allows for an easy rate of development and supports all-in-one services such as domain name resolution, website publishing, security, O&M, and application management.
                                    </p>
                                </div>
                            </div>

                            <div class="row mt-7">
                                <div class="col-md-2 text-center">
                                    <img class="mt-4 custom__card-icon" src="../../layanan/assets/img/img-devops/alibaba-balancer.webp" alt="alibaba-balancer">                                    
                                </div>
                                <div class="col-md-10">
                                     <h4 class="font-black mt-3-sm">Server Load Balancer (SLB)</h4>
                                    <p>
                                        This is a service from Alibaba Cloud made in order to distribute network traffic across backend server groups and made to improve the service capabilities and application availability. This SLB is also capable of providing high performance load balancing capabilities. 
                                    </p>
                                </div>
                            </div>                                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>