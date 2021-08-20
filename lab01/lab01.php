<html>
  <head>
    <title>Lab01</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lab01.css">
  </head>
  <body>
  <!--heading tag-->
    <header>
      <h1><?php echo ("Hello, World!"); ?></h1>
    </header>
    <!--paragraph tag-->
    <div class="paragraph-wrapper">
      <p>
        Dear Hiring Manager, <br><br>

        Throughout my career, I have contributed to impacting business outcomes through effective organization, prioritization, and execution of key projects. My skills and qualifications are an ideal match to the Jr. Front End Developer requirements and will bring immediate value to [Name of Company]'s goals.
        <br><br>
        Previously, in my Computer Programming Student role, I exercised a calculated and methodical approach to problem-solving. I am independently motivated, yet I appreciate team efforts and collaborate productively within groups. Additionally, I am knowledgeable in programming and usability testing with proficiency in debugging.
        <br><br>
        This opportunity is especially exciting because my professional goals align with [Name of Company]'s mission and values. I believe my innovation, problem-solving, and observation abilities will support and drive your continued organizational success.
        <br><br>
        My previous experience working as Computer Programming Student gave me the neccesary experience. I have an excellent track record of completing tasks quickly and with acute accuracy. My expertise in Programming makes me a great addition to your team.
        <br><br>
        To demonstrate the scope of my career history and professional competencies, please take a moment to review my attached resume. I appreciate your evaluation of my credentials and subsequent response. You can reach me at the phone number or email listed above. I look forward to hearing from you.
        <br><br>
        Thank you, in advance, for your consideration.
        <br><br>
        Best regards,
        <br><br>
        Evan Hernandez
      </p>
    </div>
    <!--break tag-->
    <br>
    <!--table-wrapper-->
    <div class="table-wrapper">
      <table border="1">
        <!--table-caption-->
        <div class="table-caption">
          <caption>
            <h2>SKILLS</h2>
          </caption>
        </div>
        <!--Columns(4)-->
        <!--Rows(4)-->
        <!--row1-->
        <div class="row1">
          <tr>
            <td>Language</td>
            <td>Level</td>
            <td>Experience</td>
            <td>Priority</td>
          </tr>
        </div>
        <!--row2-->
        <div class="row2">
          <tr>
            <td>Python</td>
            <td>Beginner</td>
            <td> < 1 year </td>
            <td>2</td>
          </tr>
        </div>
        <!--row3-->
        <div class="row3">
          <tr>
            <td>C++</td>
            <td>Beginner </td>
            <td> < 1 year</td>
            <td>3</td>
          </tr>
        </div>
        <!--row4-->
        <div class="row4">
          <tr>
            <td>HTML/JS/CSS</td>
            <td>Beginner</td>
            <td> 1-2 years</td>
            <td>1</td>
          </tr>
        </div>
      </table>
    </div>
    <div style="padding-top: 20px;">
      Please leave your info below.
    </div>
    <div class="form-wrapper">
      <form>
        <div class="form-name">
          <!--Name-->
          <label for="name">Name </label>
          <input type="text" placeholder="John Doe" autofocus name="name" />
        </div>
        <div class="form-email">
          <!--Email-->
          <label for="email">Email </label>
          <input type="email" id="email" placeholder="JohnDoe123@???.com" autofocus name="email" />
        </div>
        <div class="form-submit">
           <!--Submit-->
          <input type="submit" value="Submit">
        </div>
      </form>
      <!--button tag-->
      <button>Click</button>
    </div>
  </body>
</html>