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
Say the distributor has the set T = {t1, . . . , tm}. The leaked set found out is S. Assumptions made in this implementation are:
For all t, t’ ∈ S such that t ≠ t’ the provenance of t is independent of the provenance of t’
An object t ∈ S can only be obtained by the target in one of two ways:
A single agent Ui leaked t from its own Ri set or the target guessed (or obtained through other means) t without the help of any of the n agents.

Consider that sets T, R’s and S are as follows: T = {t1, t2, t3}, R1 = {t1, t2}, R2 = {t1, t3}, S = {t1, t2, t3}. For this situation, every one of the three of the distributor’s objects have been leaked and show up in S. Consider how the target may have gotten object t1, which was given to both agents. From Assumption 2, the target either guessed t1 or one of U1 or U2 leaked it. Knowing that the probability of the former event is p, so assuming that probability that each of the two agents leaked t1 is the same cases formed are:
the target guessed t1 with probability p;
* agent U1 leaked t1 to S with probability (1 − p)/2
* agent U2 leaked t1 to S with probability (1 − p)/2
Similarly, it is found that agent U1 leaked t2 to S with probability 1 − p since he/she is the only agent that has this data object. Given these values, the probability that agent U1 is not guilty can be computed, namely that U1 did not leak either object:

P r{G’1|S} = (1 − (1 − p)/2) × (1 − (1 − p)) (1)
Hence, the probability that U1 is guilty is:
P r{G1|S} = 1 − P r{G’1} (2)
Consider the set of agents Vt = {Ui |t ∈ Ri} that have t in their data sets, now generalizing (1) and (2) :
P r{Ui leaked t to S} = { 1−p /|Vt| , if Ui ∈ Vt and 0, otherwise } (3) Given that agent Ui is guilty if he leaks at least one value to S, with Assumption 1 and Equation 3 the probability P r{Gi |S} is computed, that agent Ui is guilty:
P r{Gi |S} = 1 – πt∈S⋂Ri (1 – (1 – p)/ |Vt| ) (4)

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
