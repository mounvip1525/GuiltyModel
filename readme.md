## Guilty Model Agent 💂‍♂️
We built an application that will monitor if on the off chance any data has been leaked by the agent of the enterprise. Additionally, here we ensure proper authentication among agents/users accessing the system so that data is accessed by only valid users. It likewise helps in discovering Guilt of Agent from the given set of agents which has leaked the data, who should be blacklisted, using Probability Distribution to find the guilt using the guilt model.

<a href="https://www.figma.com/file/BwsWk8fKlDE3buz83Yjb5R/ISAA---Gulity-Model?node-id=0%3A1">Figma Design</a>

## Tools & Technologies ⚒️
<div align="center">
<img height="50px" src="https://raw.githubusercontent.com/github/explore/ccc16358ac4530c6a69b1b80c7223cd2744dea83/topics/php/php.png" style="border:2px solid grey"/>
<img alt="HTML5" width="50px" height="50px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/html/html.png" />
<img alt="CSS3" width="50px" height="50px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/css/css.png" />
<img alt="JavaScript" width="50px" height="50px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/javascript/javascript.png" />
  <img height="50px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png" />
</div>

## System Structure 🏗️
<div align="center"><img height="600" src="https://github.com/mounvip1525/GuiltyModel/blob/master/Screenshot%202022-01-22%20at%209.25.11%20PM.png" /></div>

## Modules 🧱
1. <i>Admin Data Control</i>
This module allows the admin to upload dataset to the database of the system (which can be seen by all users but cannot be accessed without permission) and share any data set to a particular user in private

2. <i>User Data File Access</i>
This module allows users to send a request to the admin for a key in order to access the file available in the database of the system. It is only when the proper key is received, the user can access the data file.

3. <i> Probability Of Guilt</i>
This module analyses which user has the leaked file and sort the list of the probable leakers. Then using the guilt algorithm, the probability calculation is done keeping in mind a cookie jar analogy. If the distributor sees “enough evidence” that an agent leaked data, he may stop doing business with him, or may initiate legal proceedings.

4. <i> Managing the Users</i>
In this module the admin can make changes to the authority of the users. In other words, he can black list the “known bad” by using the probability of the leaker calculated using the guilt model in order to ensure security of the system.

## Guilty Algorithm


## Contributors 👧
<ul>
  <li><a href="https://github.com/mounvip1525">Mounvi Podapati</a></li>
  <li><a href="https://github.com/SrishtiGohain">Srishti Gohain</a></li>
</ul>
<br>

```javascript

if (youEnjoyed) {
    doStarThisRepository();
}

```
