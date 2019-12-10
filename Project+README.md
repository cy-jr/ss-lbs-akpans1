## CPS 592-2: Language Based Security
Instructor: Dr. Phu Phung

## Deploying A Mobile Device Management Solution 
Group Members
### Samuel Cyril - akpans1@udayton.edu
### Abdul Muqtadir - durrania1@udayton.edu

## Project Summary
Since the 2000s, we have seen a glaring increase in the adoption of smart mobile devices into enterprise environments. Moreso, employees are more inclined to use devices that they are familiar with, presenting a whole new field of security concerns for companies. Since these devices host confidential corporate information it has become necessary to implement solutions that address these concerns. In this project we will be demonstrating the capabilities of a mobile device management solution as applicable in corporate environments across all industry categories. 


## Introduction 
It is no longer news that the mobile device security threat landscape continues to expand at an exponential rate. A recent report from Wandera alludes to the rise in sophistication and distribution of cyber attacks on mobile devices. It has become rather to quantify the amount of cyber attacks recorded annually in terms of a uni-variable. With the ability of attackers to exploit application and network vulnerabilities, it is important that users ranging from individuals to large corporations imbibe security best practices with the most efficient, cost effective methods possible. 
With the numerous attack surfaces created by vulnerable software applications and unfortunately gullible humans, security concerns arise for companies whose individuals would be more effective working with mobile devices. Simply put, the average employer in today’s corporate environment depends on a mobile device to a large extent to be more effective at tasks. Mobile devices which are now just as powerful as computers have  access to company confidential data. This puts company data at risk of exposure to attackers if mobile device security concerns are not addressed. This gives rise to the need for mobile device management. Many of such solutions have been implemented by companies to mitigate the risks created by vulnerabilities in networks and applications. 
Of interest to this project is the IBM MaaS360 suite produced by IBM that allows for the management of devices of all categories. This project details the procedures of how this solution can be effectively deployed and used to implement a variety of security policies to ensure the safety and security of data on mobile devices.



## Background 
With the advent and increase of employees using mobile devices in corporate environments, more security concerns arise as companies need to ensure that sensitive data is securely contained on employee mobile devices. 
Organizations have taken advanced steps to contain the growth and utilization of mobile devices as well as ensure the security of pertaining data. One major area of concern involved separating company data from individual data. A number of methodologies have been adopted to handling this concern. Given that each mobile device has to be recognized and registered with the company in some format, the methodologies can be categorized as follows: 
- Bring your Own Device (BYOD): 
Employees are free to work any device of their choosing provided it is registered and complies with the company mobile device policies.
- Choose Your Own Device (CYOD)
Employees are offered a range of mobile devices choices (usually varied by OS e.g iOS, Windows, Android, etc) from which to select the most preferred option based on the individual. 
- Corporately Owned Personally Enabled (COPE): 
A similar alternative to BYOD, the company provides devices that the employee uses for work purposes as well as for personal endeavours including social media, games, entertainment. The device however, is closely monitored and protected by the company security policies. For example, third applications have to be approved and whitelisted by the company IT department before installation. 
- Corporately Owned Business Only (COBO): 
The devices in this methodology are provided by the company and restricted to business related use only. Although this method is not so common anymore, it tends to be the safest measure a company could use to effectively reduce risks associated with mobile device usage. 
According to Faronics.com, 72% of organizations support BYOD for their employees, making BYOD the prevalent mobile device use method for organizations today. This implies that companies have to implement strict standards and procedures to ensure that proprietary information remains secure while employees enjoy the flexibility of their choices. 
A large number of solutions have been implemented over time by different companies and we list a few of them as follows: 
- Intune Enterprise Mobility+Security: 
Developed by Microsoft, it incorporates features such as: Application management, Advanced Microsoft Office 365 data protection, Integrated PC management, Integrated on-premises management, Identity & access management, Information protection, Identity-driven security. 
- Cisco Meraki: 
This solution implements features including: Restrictions and Deployable Network Settings, Mobile Device Tagging, Remote App Deployment, Scalable Endpoint Configuration, Network activity analysis, Unified Multi-Platform Device Management, Asset and Inventory Management, Enterprise Connectivity.
- SAP Mobile Secure:
This is a cloud-based Enterprise Mobility Management (EMM) platform that offers integrated tools for MDM, BYOD security, mobile application management (MAM), and more. It also includes the ability to set up a custom app store while highlighting its major features and simple self-service and a frictionless user experience. 
For this project, we considered and selected the IBM MaaS360 solution. It is a robust solution which provides visibility and control of different mobile devices, including iOS, macOS, Android, and Windows through a fairly trivial portal that eliminates complexity. It provides a seamless over-the-air (OTA) device enrollment feature and implements features including: Multi-OS and platform security, support for IoT devices, support for ruggedized Android devices & apps, support for Windows 10 to Windows 7 legacy PCs, secure container to store corporate content. We obtained a trial-version of this solution with express permission for use this project. In the next topic, we go into further detail about the setup and device enrollment procedures. 



## Project Description 
This work involves implementation: Present the design in one part and experiment structure in the other. Instructions on how to run the experiment too must be included,
This project has three implementation phases: 
Setting up a user account for access and control
Formulation of security policies according to operating systems like Windows, Android, IOS
Setup of End User Portal for granting access to manage individuals devices under the ID

An App Catalog is also setup for users for publishing applications involving Aspect Oriented Programming injection of source code for a corporate application to be published. 
There are two major types of policies:
Workplace Persona Policy
OS 


### 1. Workplace Persona Policy: 
This policy [figure 1] proposed and implemented by IBM utilizes a secure app container in which the administrator stores all the sensitive information pertaining to both the individual and the organization. These policies are applied to avoid security breaches. Under this policy, there are two fail safe features: selective wipe and full wipe. The selective wipe operates on the container, it deletes all the information before the user can access it to preserve the data confidentiality while the full wipe is set to perform a full device wipe. 

Figure 1: Workplace Persona Policy




### 2. Operating System (OS) Policy: 
The OS Policy operates on the kernel level. It allows full room to implement security policies with respect to the device environment and the requirements needed by the organization. It allows the user to enforce a passcode as a policy as well as an application whitelist. It also includes geotagging which allows the user to restrict the device location outside which the user will be unable to use the device for company related tasks. 


Figure 2: OS Policy

Under the OS policy, we can enforce restrictive policies on features such as the camera, SD card, device memory, network-provided date and time.

Figure 3: Special Restrictions 



We can also monitor and enforce policies on device Native app compliance by enabling and disabling applications as well as blacklisting. 

Figure 4: Native App Compliance

### Device Enrollment
For these policies to be enforced on devices, each device has to be enrolled by the admin. A device can be enrolled simply by creating an enrollment request for the device by the user and specifying the policies required for implementation.
Steps to enroll a device: 
Click “Add device”

Figure 5: Add device


Enter device details and click “Send Request”

Figure 6: Send Request

Then the application generates a username and default password for the new device and the user access portal. 

Figure 7: User device added

### Enrolled device:
On the devices tab, there is a table showing all the currently enrolled devices. In this case, we enrolled a single device named akpans1-Fero_X1. 

Figure 8: List of enrolled devices

Enrolled Device Statistics and Operations :
Now we have access to general information about the device. 

Figure 9: Device information 

The Apps installed option displays a table listing all the currently installed applications and corresponding information on the device.

Figure 10: Applications installed on device

We can also obtain a history of operations performed remotely on the device. This is akin to a log of previously executed commands.

Figure 11: Admin activity on device history

We also have access to the device network information. 

Figure 12: Network information

Under the Reports tab, There is also an option called Hardware Inventory which can be used to display the device hardware information. 
Figure 13: Hardware inventory 

### Deployment Details:
Under the Reports tab, we also have the option to view a graphical report showing the current deployment statistics. 

Figure 14: Deployment statistics

### End User Portal:
Each user has a portal from which he can access his device remotely. 


Figure 15: End User Portal
### On the Device: 
On the device end, a client application called Maas360 must be installed for the device. This application receives remote instructions and executes them on the device. 

Figure 16: IBM MaaS360 Client Application

## Results
After the setup is complete and we have observed the device to ensure compliance we can nwo test the has administrative functionalities the application has on the device. 
We will demonstrate by:
Sending a message to the device
Trying to launch a blacklisted  application

### 1. Message the device: 
On the devices tab, click Message

Figure 17: Message device

Then type message title and content and click the “Send Request” button

Figure 18: Type in message title and content

The message is received almost immediately by the device. 

Figure 18: Message received


### 2. Open blacklisted application: 
On the device we can see a generated list of enforced policies. To do this we click settings and select Enforced Policies: 

Figure 19a: Click Settings

Figure 19b: Click Enforced Policies

Figure 19c: Displayed list of enforced Policies
 Next, when we try to open the Youtube application, we are restricted.

Figure 20: Restricted application


## Conclusion
We can see that this application application has a level access and control on the device through the policies we implemented. This presents potential for more secure mobile device policy implementations to mitigate more security risks associated with mobile device usage in corporate environments.
References: 
Andre, Louie. “20 Best Mobile Device Management Software in 2020.” Financesonline.com, FinancesOnline.com, 6 Dec. 2019, https://financesonline.com/mobile-device-management/.
IBM MaaS360, https://m3.maas360.com/emc/.
