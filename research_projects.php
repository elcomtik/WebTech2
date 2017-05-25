<?php
/**
 * Created by PhpStorm.
 * User: Sabinka
 * Date: 5/24/2017
 * Time: 8:49 PM
 */
include_once 'session.php';
?>

<head>
    <?php
    include_once 'includes.php';
    ?>
    <script src="assets/js/intranet.js"></script>
</head>
<body>
<?php
include_once 'menu.php';
?>
<h1><?php echo $lang['navbar.projects'] ?></h1>
<table class="table">
    <thead>
    <tr>
        <th><?php echo $lang['projects.id'] ?></th>
        <th><?php echo $lang['projects.name'] ?></th>
        <th><?php echo $lang['projects.duration'] ?></th>
        <th><?php echo $lang['projects.investigator'] ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th colspan="4">VEGA</th>
    </tr>
    <tr>
        <td>1/0937/14</td>
        <td onclick="getModal('1a', '1d')">Advanced methods for nonlinear modeling and control of mechatronic systems
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project focuses on development of nonlinear control methods and their applications. It includes algebraic and differential approach to nonlinear control, control of time-delayed and constrained systems considered as a part of hybrid autonomous intelligent systems, simulations modeling and automatized design based on numeric and symbolic computer aided methods. It is dealing with formulation of solved problems within the embedded systems and PLCs, with signal processing, control via Internet, mobile and radio networks, with identification and compensation of nonlinearities, integration of particular approaches in implementing and physically accomplishing particular algorithms and structures. Thereby, one considers especially mechatronic and robotic systems and other systems with dominating nonlinear behavior.' id='1a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2014-2017' id='1d'/>
        </td>
        <td>2014-2017</td>
        <td>prof. Ing. Mikuláš Huba, PhD.</td>
    </tr>
    <tr>
        <td>1/0228/14</td>
        <td onclick="getModal('2a', '2d')">Modelling of thermohydraulic and stress conditions in selected components of NPP with pressurized water
            reactor
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The aim of this project is to create mathematical models of selected components of nuclear power plants like fuel assembly, the active zone as well as a nuclear reactor itself considering pressurized water reactor. These components will be analyzed in terms of thermo-hydraulics and mechanical point of view (stress loading). Obtained numerical results will be confronted with available experimental data to increase operational safety of these devices. In the process of developing the mathematical models modern numerical methods such as Computational Fluid Dynamics (CFD) and Finite Element Method (FEM) will be used. These methods are implemented in programs ANSYS CFX and ANSYS Multiphysics. The proposed project will interconnect the thermo-hydraulic and mechanical mathematical models, which will be implemented so that the individual physical domains were directly connected. The outcome of the project will be the mathematical models and also scientific and technical papers and conference contributions.' id='2a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2014-2016' id='2d'/>
        </td>
        <td>2014-2016</td>
        <td>doc. Ing. Vladimír Kutiš, PhD.</td>
    </tr>
    <tr>
        <td>1/0453/15</td>
        <td onclick="getModal('3a', '3d')">Research of nonuniform torsion of cross-sections
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project aim is to examine the effects of non-uniform torsion in thin-walled beams with closed cross-section by numerical methods and experimental measurements on physical models. A 3D beam finite element will be created including the non-uniform torsion with the secondary torsion moment deformation effect. The stiffness and mass matrix will be prepared for a homogeneous material as well as for composite beams with longitudinal variation of material properties. Derived relations and equations will be implemented in the computer programs for elastic-static and modal analyses. Measurement equipment will be designed, by which the results of theoretical calculations by the new finite elements will be verified. It is expected that the results of the project will contribute to review the arguments of the Eurocode 3, according to which the effect of non-uniform torsion can be neglected in the closed cross-section beams. The results of the project are intended to enhance the safety of the beam structures design.' id='3a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015-2017' id='3d'/>
        </td>
        <td>2015-2017</td>
        <td>prof. Ing. Justín Murín, DrSc.</td>
    </tr>
    <tr>
        <th colspan="4">KEGA</th>
    </tr>
    <tr>
        <td>035STU-4/2014</td>
        <td onclick="getModal('4a', '4d')">Development of virtual laboratory for implementation of advanced methods of teaching in the new study program Electromobility
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project aim it to build a modern specialized virtual laboratory for prepared study program Electromobility. In this project, advanced teaching methods are proposed that integrate theoretical knowledge into practical application directly into mechatronic systems in vehicles with electric drive (electric vehicles). To promote specialized training and a new methodology in the study program Electromobility, the project will support processing of a new modern study literature and creating a dedicated virtual laboratory with innovative facilities for theoretical and practical training courses in this program of study. These courses aim at smart mechatronic systems used in electromobility systems with links to the new drive systems of vehicles using virtual prototyping. The project includes new study materials processing, writing scientific monographs, creating innovative websites, publications in peer-reviewed journals and participation in scientific conferences. Dedicated virtual laboratory will be equipped with educational mechatronic modules for teaching and learning sophisticated technology.' id='4a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2014-2016' id='4d'/>
        </td>
        <td>2014-2016</td>
        <td>prof. Ing. Viktor Ferencey, PhD.</td>
    </tr>
    <tr>
        <td>032STU-4/2013</td>
        <td onclick="getModal('5a', '5d')">Online laboratory for teaching automation control subjects
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project is focussed on development of interactive reusable learning objects for chosen segments of automatic control, on building broader spectrum of experiments illustrating application of studied theoretical approaches onto practical problems enabling and supporting acquisition of knowledge, skills, habits and attitudes in an quasi-authentic environment. The project is going to support the use of not only proprietary but also open technologies that bring various advantages in the area of results dissemination and from the financial point of view as well. Our aim is to facilitate approach to laboratory experiments for students in daily or distance form of education.' id='5a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 1.1.2013-31.12.2015' id='5d'/>
        </td>
        <td>1.1.2013-31.12.2015</td>
        <td>doc. Ing. Katarína Žáková, PhD.</td>
    </tr>
    <tr>
        <td>030STU-4/2015</td>
        <td onclick="getModal('6a', '6d')">Multimedial education in mechatronics
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: Presently, interactive education forms based on exploitation of Internet, video, audiovisual aids and remote laboratories (on-line education) are world trends in modern and barrier-free education; it is applied not only in distance education but in the attendance teaching as technology augmented classroom teaching. Along with slide-shows and educational miniapplications (dynamic websites, flash animations, Java Applets etc.) research universities usually prefer to develop their own education videos targeted to the audience in a single course. Education videos are freely available and enable the students to follow the explanatory discourse on the subject topic anytime and anywhere. Design and realization of a comprehensible and interesting educational video on a technological field is a quite complex task requiring synergy of technical, educational and artistic qualities of its creators. The project deals with the multimedia support of education in mechatronics engineering, with the focus on applied informatics, automation and related fields. The objective of the project is to build a multimedia laboratory for creating high-quality educational videomaterial for both distance and attendance education in mechatronics engineering. Project outcomes will be further employed in life-long education of practitioners, and for popularization of mechatronics and automation among the public and potential university students of technology.' id='6a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015-2017' id='6d'/>
        </td>
        <td>2015-2017</td>
        <td>doc. Ing. Danica Rosinová, PhD.</td>
    </tr>
    <tr>
        <td>011STU-4/2015</td>
        <td onclick="getModal('7a', '7d')">Electronic educational-experimental laboratories of Mechatronics
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project deals with the creation of modern knowledge and experimental basis for education in Mechatronics Engineering with the emphasis on electronic components. Due to the fact that mechatronics integrates several fields of knowledge and their junction yields a synergy effect, new methods and forms of eduation will be elaborated within the project allowing students to acquire new knowledge combined with practical experience in using modern electronic components and systems; such systems are integral parts of complex pervasive mechatronic systems (in consumer electronics, energy and automotive industries, healthcare). Inspiration for elaboration of the proposed project was launching of new study programs ""Automotive Mechatronics"" (Bachelor degree), and ""Applied Mechatronics and Electromobility"" (Master degree). For these study programs electronic textbooks for 7 subjects will be created. To further increase quality of education and research, 5 new experimental workplaces are planned to be created within the project to according to the latest development trends electronics, sensing technology and control systems having multi-purpose exploitation in direct teaching, individual and team projects as well as in research and development activities of the Institute. The objective of the project is to increase professional competences of students, teachers and researchers, and all involved in the areas: advanced sensors and MEMS, smart materials based actuators, electric traction motors, microcontrollers and digital signal processors (DSP´s) for embedded control systems and signal processing, design of control algorithms and their programming, electronics and integrated circuits (ASICs) for mechatronics. Another important sub-objective is to acquire wide competences in communication systems for various application areas of mechatronic systems, in particular in automotive industry. Modern audiovisual systems, web pages and multimedia processed videos will be widely used to support project results.' id='7a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015-2017' id='7d'/>
        </td>
        <td>2015-2017</td>
        <td>doc. Ing. Peter Drahoš, PhD.</td>
    </tr>
    <tr>
        <th colspan="4">APVV</th>
    </tr>
    <tr>
        <td>APVV-0246-12</td>
        <td onclick="getModal('8a', '8d')">Advanced Methods and Simulations of SMART Mechatronic Systems
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: In the first phase, attention will be given to the material, technical and equipment set-up required for the first set experiments. At the same time, the FGM-beam FEM equations will be derived and SMA models designed. In addition, the first sets of experiments will be used for the verification of numerical models of 3D-FGM and SMA systems. A complex verification of numerical models will take place on selected samples whose chemistry has been consistently analyzed. Results of SMA actuator measurements will be used in the consecutive stages of the project in the design and application of alternative anchoring for SMA actuators. Next the nonlinear model of SMA actuator and new methods of synthesis focused on position control and error elimination will be proposed. This research will take place in parallel with the theoretical analysis and FEM equations derivation of FGM shells. In the final stage, emphasis will be given to both the verification of the derived FGM beam-shell equations by real sample measurements and the control of the SMA actuator by conventional and intelligent methods.' id='8a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2013-2016' id='8d'/>
        </td>
        <td>1.10.2013-30.9.2016</td>
        <td>prof. Ing. Justín Murín, DrSc.</td>
    </tr>
    <tr>
        <td>APVV-0343-12</td>
        <td onclick="getModal('9a', '9d')">Computer aided robust nonlinear control design
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project deals with development and introduction into practice of the computer aided system for design of robust constrained nonlinear control (in versions for Matlab/Simulink and web) and of the integrated electronic environment in LMS Moodle interconnecting the system with the project web page, with the elearning modules and with access to remote experiments enabling its online verification. The system will be based on a new robust control method based on constraining deviations from required shapes of the input, output, or state variables. This is holistically integrating several up to now isolated control design approaches - the traditional PID control, modern state & disturbance observer approach, minimum time control, nonlinear control, control of systems with long dead time and robust control. The developed system is intended for a broad class of uncertain and nonlinear plants that represent a majority of all applications in practice. The system will consist of a central work station enabling a sufficiently fast generation of the so called performance portrait of given plant with a considered type of control, from a repository of generated performance portraits and from graphical terminals enabling by means of specifying parameters of given plant and the required shape-related performance measures to determine the optimal controller tuning guaranteeing the fastest possible transients responses in the control loop under consideration of the given uncertainties.' id='9a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 1.10.2013-31.3.2017' id='9d'/>
        </td>
        <td>1.10.2013-31.3.2017</td>
        <td>prof. Ing. Mikuláš Huba, PhD.</td>
    </tr>
    <tr>
        <td>APVV-0772-12</td>
        <td onclick="getModal('10a', '10d')">Advanced control methods based on FPGA structures
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project deals with research and development of advanced control methods based on HW implementation of conventional (PID) as well as modern optimal, robust and predictive algorithms applicable in control of plants with fast dynamics. Predominating approaches in the research of modern control systems implementation are microprocessor-based solutions (software approach), ASIC (dedicated approach) and the FPGA based approach. Field Programmable Gate Arrays (FPGA) are configurable circuits of very-large-scale-integration (VLSI) able to integrate various logical and control functions. In general, HW implementations of control algorithms are faster by several orders compared with SW implementations due to parallel processing of information; moreover they are more compact and also less expensive. The main objective of the project is research and development of FPGA-based control algorithms. Their research and development will be studied on available FPGA development kits and verified on laboratory plants with fast dynamics.' id='10a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 1.10.2013-30.9.2017' id='10d'/>
        </td>
        <td>1.10.2013-30.9.2017</td>
        <td>doc. Ing. Alena Kozáková, PhD.</td>
    </tr>
    <tr>
        <td>APVV-14-0613</td>
        <td onclick="getModal('11a', '11d')">Broadband MEMS detector of terahertz radiaton
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project is aimed on research and development of new types of broadband detectors for terahertz frequency range. This new type of detector is designed in a concept of micro-electro-mechanical system and uses the bolometric sensing principle. The design construction of the detector consists of a microbolometric sensing device coupled to a broadband antenna. Thermal conversion of the incident THz radiation takes place on a thin polyimide membrane which enables (a) to achieve high thermal conversion efficiency and (b) to design detectors with balanced amplitude characteristics even at high frequency range. The proposed MEMS detector concept will be optimized by a sophisticated process of modeling and simulation in direct mutual iteration with experimental analysis of functionality and detection capability. The completion of the project will be given by the developed state-of-the-art methodology of characterization, broadband THz detection and simulation of the MEMS detector device applicable in the research and education.' id='11a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015-2018' id='11d'/>
        </td>
        <td>2015-2018</td>
        <td>doc. Ing. Vladimír Kutiš, PhD.</td>
    </tr>
    <tr>
        <th colspan="4"><?php echo $lang['projects.cooperation'] ?></th>
    </tr>
    <tr>
        <td>SK06-II-01-004</td>
        <td onclick="getModal('12a', '12d')">Support of international mobilites between STU Bratislava, NTNU Trondheim, and Universität Liechtenstein
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The aim of the project is to support international mobility of students, PhD students, and staff members of four participating faculties of STU in Bratislava with partners from NTNU Trondheim and Universität Liechtenstein. It will initiate academic cooperation between the University of Liechtenstein and STU Bratislava in construction, architecture, and space planning, focusing on the use of alternative energy sources in operation of buildings, including computer-aided simulations of energy needs and internal environment, and spatial planning of rural settlements as well. The project also contributes to further strengthening of already existing cooperation between NTNU Trondheim and faculties of STU in Bratislava in the field of advanced methods of automatic control and to progress of inter-faculty cooperation at STU in Bratislava.' id='12a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2.6.2015 - 30.9.2016' id='12d'/>
        </td>
        <td>2.6.2015 - 30.9.2016</td>
        <td>Coordinator from ÚAMT - prof. Ing. Mikuláš Huba, PhD.</td>
    </tr>
    <tr>
        <th colspan="4"><?php echo $lang['projects.others'] ?></th>
    </tr>
    <tr>
        <td>TB</td>
        <td onclick="getModal('13a', '13d')">Softvérové riadenie smerovej dynamiky vozidla UGV 6x6
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: ' id='13a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015' id='13d'/>
        </td>
        <td>2015</td>
        <td>Ing. Martin Bugár, PhD.</td>
    </tr>
    <tr>
        <td>VW</td>
        <td onclick="getModal('14a', '14d')">Predlžovanie životnosti akumulátorového systému
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: ' id='14a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015' id='14d'/>
        </td>
        <td>2015</td>
        <td>Ing. Martin Bugár, PhD.</td>
    </tr>
    <tr>
        <td>MV</td>
        <td onclick="getModal('15a', '15d')">REST Platform for Online Control of Experiments
            <input type='hidden' value='<?php echo $lang['projects.annotation'] ?>: The project is a part of an extensive endeavor to create universal protocol for remote control of real plants, and a suite of software tools to implement this protocol. The main objective of this whole endeavor is to simplify and accelerate implementation of modular online laboratories. Tasks of this project include design and implementation of a software tool for remote access to Scilab, completion of implementation of a similar tool for Matlab/Simulink, and design and partial implementation of a mechatronic system which will serve for demonstration of mentioned tools and later on as teaching aid.' id='15a'/>
            <input type='hidden' value='<?php echo $lang['projects.duration'] ?>: 2015' id='15d'/>
        </td>
        <td>2015</td>
        <td>Ing. Miroslav Gula</td>
    </tr>
    </tbody>
</table>
</body>