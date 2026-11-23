<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohamed Musthafa | Security Researcher</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;700;800&family=Inter:wght@400;600&display=swap');

        :root {
            /* IDE/Terminal Theme Colors */
            --bg-main: #0d1117;
            --bg-card: #161b22;
            --bg-hover: #21262d;
            --border: #30363d;
            
            --text-primary: #c9d1d9;
            --text-secondary: #8b949e;
            
            /* Syntax Highlighting Accents */
            --keyword-pink: #ff7b72;
            --string-blue: #a5d6ff;
            --func-yellow: #d2a8ff; 
            --attr-green: #7ee787;
            --num-orange: #ffa657;
            --cyan: #79c0ff;
            --danger-red: #f85149;

            --font-mono: 'JetBrains Mono', monospace;
            --font-sans: 'Inter', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-main);
            color: var(--text-primary);
            font-family: var(--font-sans);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* --- Typography & Elements --- */
        .mono { font-family: var(--font-mono); }
        .comment { color: var(--text-secondary); font-family: var(--font-mono); font-style: italic; }
        
        .highlight-red { color: var(--danger-red); }
        .highlight-blue { color: var(--string-blue); }

        .section-title {
            font-family: var(--font-mono);
            font-size: 1.5rem;
            color: var(--text-primary);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-title::before {
            content: "async function";
            color: var(--keyword-pink);
            font-size: 1rem;
            font-weight: normal;
        }
        
        .section-title::after {
            content: "() {";
            color: var(--text-primary);
            font-weight: normal;
        }

        .section-end {
            font-family: var(--font-mono);
            font-size: 1.5rem;
            color: var(--text-primary);
            margin-top: 1rem;
            margin-bottom: 4rem;
        }

        /* --- Navbar --- */
        nav {
            padding: 2rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border);
            margin-bottom: 4rem;
        }

        .logo {
            font-family: var(--font-mono);
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--text-primary);
            text-decoration: none;
        }

        .logo span { color: var(--keyword-pink); }

        /* --- Hero Section --- */
        .hero { margin-bottom: 6rem; }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        .hero h2 {
            font-family: var(--font-mono);
            font-size: 1.2rem;
            color: var(--cyan);
            font-weight: 400;
            margin-bottom: 1.5rem;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-top: 3rem;
            padding: 1.5rem;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            font-family: var(--font-mono);
            display: inline-flex;
            flex-wrap: wrap;
        }

        .stat-item { display: flex; flex-direction: column; }
        .stat-label { color: var(--keyword-pink); font-size: 0.9rem; margin-bottom: 0.2rem; }
        .stat-value { color: var(--string-blue); }

        /* --- Experience Section --- */
        .experience-block {
            border-left: 2px solid var(--border);
            padding-left: 2rem;
            margin-left: 1rem;
            position: relative;
        }

        .experience-item {
            margin-bottom: 3rem;
            position: relative;
        }

        .experience-item::before {
            content: "";
            position: absolute;
            left: -33px;
            top: 0;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--bg-main);
            border: 2px solid var(--attr-green);
        }

        .job-title {
            font-size: 1.4rem;
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .job-company {
            font-family: var(--font-mono);
            color: var(--attr-green);
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .job-desc { color: var(--text-secondary); max-width: 850px; }
        .job-desc ul { list-style: none; margin-top: 1rem; }
        
        .job-desc li {
            margin-bottom: 0.8rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .job-desc li::before {
            content: "->";
            position: absolute;
            left: 0;
            color: var(--num-orange);
            font-family: var(--font-mono);
        }

        /* --- Security Projects Section --- */
        .projects-grid {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-left: 1rem;
        }

        .project-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 2rem;
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: var(--danger-red);
        }

        .project-card h3 {
            font-family: var(--font-mono);
            color: var(--cyan);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .project-card .tech-stack {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            color: var(--keyword-pink);
            margin-bottom: 1rem;
        }

        /* --- Skills Section --- */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .skill-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 2rem;
            transition: all 0.2s ease;
        }

        .skill-card:hover {
            border-color: var(--text-secondary);
            background: var(--bg-hover);
        }

        .skill-card h3 {
            font-family: var(--font-mono);
            color: var(--func-yellow);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }

        .skill-card h3::before {
            content: "const ";
            color: var(--keyword-pink);
            margin-right: 0.5rem;
            font-weight: normal;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .tag {
            font-family: var(--font-mono);
            font-size: 0.85rem;
            background: rgba(121, 192, 255, 0.1);
            color: var(--cyan);
            padding: 0.4rem 0.8rem;
            border-radius: 4px;
            border: 1px solid rgba(121, 192, 255, 0.2);
        }
        
        .tag.red { background: rgba(248, 81, 73, 0.1); color: var(--danger-red); border-color: rgba(248, 81, 73, 0.2); }

        /* --- Footer --- */
        footer {
            border-top: 1px solid var(--border);
            padding: 3rem 0;
            margin-top: 4rem;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero-stats { flex-direction: column; gap: 1rem; width: 100%; }
        }
    </style>
</head>
<body>

    <div class="container">
        <nav>
            <a href="#" class="logo"><span>&lt;</span>Musthafa <span>/&gt;</span></a>
            <div class="comment">v4.0.0-stable</div>
        </nav>

        <section class="hero">
            <div class="comment" style="margin-bottom: 1rem;">// Vulnerability Researcher & Exploit Developer</div>
            <h1>Mohamed Musthafa</h1>
            <h2>Hacker by passion, developer by profession.</h2>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-label">experience:</span>
                    <span class="stat-value">4_Years</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">specialization:</span>
                    <span class="stat-value">"Automotive Penetration Testing"</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">clearance:</span>
                    <span class="stat-value" style="color: var(--danger-red)">root</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">base:</span>
                    <span class="stat-value" style="color: var(--attr-green)">"Chennai, India"</span>
                </div>
            </div>
        </section>

        <section>
            <h2 class="section-title">getProfessionalExperience</h2>
            
            <div class="experience-block">
                <div class="experience-item">
                    <div class="job-title">Automotive Cybersecurity Engineer</div>
                    <div class="job-company">Valeo India Private Limited | 2022 - Present</div>
                    <div class="job-desc">
                        <ul>
                            <li><strong>Physical Layer Exploitation:</strong> Executed advanced hardware pentesting utilizing <span class="highlight-blue">UART, JTAG, and SPI</span> interfaces to bypass secure boot mechanisms and halt execution states.</li>
                            <li><strong>Firmware & Cryptography:</strong> Successfully performed external flash dumping (EEPROM), memory carving, and bare-metal firmware analysis on ARM processors to extract hardcoded cryptographic secrets.</li>
                            <li><strong>Network Fuzzing & Spoofing:</strong> Engineered custom fuzzers to target in-vehicle networks, specifically exploiting <span class="highlight-blue">CAN and LIN</span> protocols for denial-of-service (DoS) and arbitrary diagnostic packet injection.</li>
                            <li><strong>OS & Code Security:</strong> Hardened TCU (Telematics Control Unit) operating systems. Conducted rigorous static/dynamic code analysis on AUTOSAR C/C++ architectures to eliminate buffer overflows and memory corruption flaws.</li>
                            <li><strong>Compliance & Architecture:</strong> Drove Threat Analysis and Risk Assessment (TARA) modeling in strict adherence to <span class="highlight-red">ISO/SAE 21434</span> standards, ensuring secure-by-design lifecycles.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="section-end">}</div>
        </section>

        <section>
            <h2 class="section-title">executeSecurityLabs</h2>
            
            <div class="projects-grid">
                
                <div class="project-card">
                    <h3>[0x01] Bare-Metal Firmware Reverse Engineering</h3>
                    <div class="tech-stack">ARM Cortex | GDB | Ghidra | Binwalk</div>
                    <p class="comment" style="margin-bottom: 0.5rem;">// Objective: Extract and analyze raw binary dumps from targeted ECUs without symbol tables.</p>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">Utilized JTAG debuggers to connect directly to automotive microcontrollers (e.g., NXP S32K). Carved file systems from raw memory dumps, disassembled ARM instruction sets, and mapped execution flow to identify authentication bypass vulnerabilities.</p>
                </div>

                <div class="project-card">
                    <h3>[0x02] Custom Embedded Network Fuzzer</h3>
                    <div class="tech-stack">C | MicroPython | ESP32 | ESP8266 | Socket Comm</div>
                    <p class="comment" style="margin-bottom: 0.5rem;">// Objective: Stress-test IoT and automotive wireless interfaces.</p>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">Developed lightweight socket communication scripts deployed on ESP32/NodeMCU hardware to transmit malformed packets and fuzz proprietary diagnostic endpoints, actively monitoring for memory leaks and unexpected device reboots.</p>
                </div>

                <div class="project-card">
                    <h3>[0x03] Capture The Flag & Binary Exploitation</h3>
                    <div class="tech-stack">Kali Linux | ROP Chains | Buffer Overflows | Cryptography</div>
                    <p class="comment" style="margin-bottom: 0.5rem;">// Objective: Continuous offensive skill enhancement.</p>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">Active participant in advanced CTF challenges. Expertise in exploiting stack/heap-based buffer overflows, building Return-Oriented Programming (ROP) chains, and decrypting intercepted network traffic using known cryptographic weaknesses.</p>
                </div>

            </div>

            <div class="section-end" style="margin-top: 2rem;">}</div>
        </section>

        <section>
            <h2 class="section-title">loadCoreModules</h2>
            
            <div class="skills-grid">
                
                <div class="skill-card">
                    <h3>hardware_&_embedded</h3>
                    <div class="skill-tags">
                        <span class="tag">UART / JTAG / SPI</span>
                        <span class="tag">Flash Dumping</span>
                        <span class="tag">ARM Processors</span>
                        <span class="tag">ESP32 / NodeMCU</span>
                        <span class="tag">GDB Debugging</span>
                    </div>
                </div>

                <div class="skill-card">
                    <h3>offensive_security</h3>
                    <div class="skill-tags">
                        <span class="tag red">Reverse Engineering</span>
                        <span class="tag red">Protocol Fuzzing</span>
                        <span class="tag red">Binary Exploitation</span>
                        <span class="tag red">CTF Methodologies</span>
                        <span class="tag red">Memory Corruption</span>
                    </div>
                </div>

                <div class="skill-card">
                    <h3>standards_&_defense</h3>
                    <div class="skill-tags">
                        <span class="tag">ISO/SAE 21434</span>
                        <span class="tag">TARA Modeling</span>
                        <span class="tag">TCU OS Hardening</span>
                        <span class="tag">AUTOSAR Code Audit</span>
                        <span class="tag">Secure Boot</span>
                    </div>
                </div>

                <div class="skill-card">
                    <h3>languages_&_tools</h3>
                    <div class="skill-tags">
                        <span class="tag">C / C++</span>
                        <span class="tag">MicroPython</span>
                        <span class="tag">Bash Scripting</span>
                        <span class="tag">Kali Linux</span>
                        <span class="tag">Ubuntu</span>
                        <span class="tag">Ghidra / IDA</span>
                    </div>
                </div>

            </div>

            <div class="section-end" style="margin-top: 2rem;">}</div>
        </section>

        <footer>
            <div class="comment mono">
                /* <br>
                * © 2026 Mohamed Musthafa. All rights reserved. <br>
                * No vulnerabilities found. Compiled successfully.<br>
                */
            </div>
        </footer>
    </div>

</body>
</html>