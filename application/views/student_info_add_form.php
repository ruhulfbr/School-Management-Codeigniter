
<form action="<?php echo base_url(); ?>studentController/student_info_insert" method="post" enctype="multipart/form-data">
<label style="text-align: center; font-size: 28px; margin-bottom: 15px; padding-bottom: 15px;"><u>Registation now</u>:</label><br><br>
    <table width="830" border="0">

        <tr>
            <td div align ="right">Student ID:</td>
            <td><input class="input-text" type="text" size="30"name="student_id" placeholder="Student Id" required></td>	

            <td div align ="right">Date of Admission:</td>
            <td><input class="input-text" type="date" size="30"name="date" placeholder="yyyy-mm-dd" required></td>	
        
          
        <tr>
            <td div align ="right">Name of the Student:</td>
            <td><input class="input-text" type="test"size="30" name="student" placeholder="Name" required></td>
            <td>Mobile No:<td><input class="input-text" type="test" size="30" name="smobile"/></td>
        </tr> 
        <tr>
            <td div align ="right"> Father's Name: </td>
            <td><input class="input-text" type="test"size="30" name="father"placeholder="Father Name" required/></td>
            <td>Mobile No:<td><input class="input-text" type="test" size="30" name="fmobile"></td>
        </tr>  
        <tr>
            <td div align ="right"> Mother's Name: </td>
            <td><input class="input-text" type="test"size="30" name="mother"placeholder="Mother Name" required/></td>
            <td>Mobile No:<td><input class="input-text" type="test" size="30" name="mmobile"/></td>
        </tr> 
        <tr>
            <td div align ="right">

                <font size="4" color="red">
                Present Address:<font color="black">Village:
            </td>
            <td><input class="input-text" type="test"size="30" name="village"required/></td>
            <td> <font color="0"><font size="4">P.O:<td><input class="input-text" type="test" size="30" name="po"required/></td>

        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Upazilla:
            </td>
            <td><input class="input-text" type="test"size="30" name="upazilla"required/></td>
            <td> <font color="0"><font size="4">District:<td><input class="input-text" type="test" size="30" name="district"required/></td>

        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4" color="red">
                Permanent Address::<font color="black">Village:
            </td>
            <td><input class="input-text" type="test"size="30" name="pvillage"></td>
            <td> <font color="0"><font size="4">P.O:<td><input class="input-text" type="test" size="30" name="ppo"/></td>

        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Upazilla:
            </td>
            <td><input class="input-text" type="test"size="30" name="pupazilla"/></td>
            <td> <font color="0"><font size="4">District:<td><input class="input-text" type="test" size="30" name="pdistrict"/></td>

        </tr> 	 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4" color="red">
                Local Guardians's Address(In absence of parents)::<font color="black">Name:
            </td>
            <td><input class="input-text" type="test"size="30" name="guardian"/></td>
            <td> <font color="" style="color: #008000"><font size="4">Mobile:</td><td><input class="input-text" type="test" size="30" name="gmobile"/></td>

        </tr> 	
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Village:
            </td>
            <td><input class="input-text" type="test"size="30" name="gvillage"/></td>
            <td> <font color="0"><font size="4">P.O:</td><td><input class="input-text" type="test" size="30" name="gpo"/></td>

        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Upazilla:
            </td>
            <td><input class="input-text" type="test"size="30" name="gupazilla"/></td>
            <td> <font color="0"><font size="4">District:<td><input class="input-text" type="test" size="30" name="gdistrict"/></td>

        </tr> 	
        <tr>
            <td div align ="right" colspan="2">
                <font color="0" >
                <font size="4">
                Date of birth(<font color="red">According to Birth Registration):</td><td  colspan="2"><input class="input-text" type="date" size="30" name="birth"placeholder="yyyy-mm-dd" required/></td>
        </tr>
        <tr>
            <td div align ="right">
                <font color="0" size="4">
               
                Select Class:
            </td>
            <td colspan="3">
                <select name="class" class="input-text">	
                    <option value="0">play</option>
                    <option value="1">class:1</option>
                    <option value="2">class:2</option>
                    <option value="3">class:3</option> 
                    <option value="4">class:4</option> 
                    <option value="5">class:5</option>
                    <option value="6">class:6</option>
                    <option value="7">class:7</option>
                    <option value="8">class:8</option>
                    <option value="9">class:9</option>
                    <option value="10">class:10</option>
                    <option value="11">class:11</option>
                    <option value="12">class:12</option>
                </select>
            </td>
            
        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Section:</td><td>
                <select name="section" class="input-text">
                    <option value="A"> A</option>
                    <option value="B"> B</option>
                </select>
            </td>
            <td> <font color="0"><font size="4">Roll No:<td><input class="input-text" type="test" size="30" name="roll"placeholder="Roll no" required/></td>

        </tr> 	
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Academic Year:</td><td><input class="input-text" type="text" size="30" name="academic"required/></td>
        </tr>	 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Four Subject:<td>
                <select name="subject" class="input-text">	
                    <option value="Highermathematics">1.None
                    <option value="Biology">2.Biology
                    <option value="Computer">3.Computer
                    <option value="Agriculture">4.Agriculture
                    <option value="Civics">5.Civics
                    <option value="Economics">6.Economics
                    <option value="Math">7.Math
                    <option value="Not Applied">8.Highermathematics
                </select>
            </td>
        </tr> 	
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Blood Group:<td>
                <select name="blood" class="input-text">	
                    <option value="A"> A
                    <option value="A+"> A+
                    <option value="AB"> AB
                    <option value="AB+"> AB+
                    <option value="B+"> B+ 
                    <option value="0+"> O+ 
                    <option value="0-"> O-
                </select>
            </td>
        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Sex:<td>
                <select name="sex" class="input-text"> 
                    <option value="Female"> Male
                    <option value="Female"> Female
                </select>
            </td>
        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Status:<td>
                <select name="sta" class="input-text"> 
                    <option value="Present"> Present
                    <option value="Not Present"> Not Present
                </select>
            </td>
        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                E-mail Address:</td><td><input class="input-text" type="email" size="30" name="email"/></td>
        </tr>			
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Select Hobby:<td>
                <select name="hobby" class="input-text">	
                    <option value="Reading">    1:Reading
                    <option value="Walking">    2:Walking
                    <option value="Travelling"> 3:Travelling
                    <option value="Fishing">    4:Fishing
                    <option value="Watching">   5:Watching
                </select>
            </td>
        </tr> 
        <tr>
            <td div align ="right">
                <font color="0">
                <font size="4">
                Co-curriculum activities:</td>	 
        </td><td><input class="input-text" type="checkbox" name="song" value="song" /> 	<font color="0"> Islamic song <input class="input-text" type="checkbox" name="debate" value="debate" /> Debate 
        <input class="input-text" type="checkbox" name="game" value="game" /> <font color="0">Games<input class="input-text" type="checkbox" name="painting" value="painting" /> Painting
        <input class="input-text" type="checkbox" name="jokes" value="jokes" /> Jokes<input class="input-text" type="checkbox" name="sports" value="sports" /> Sports

    </td>
</tr>
<tr>
    <td div align ="right">
        <font color="0">
        <font size="4">
        <label for="file">Photo of the Student:</label></td><td><input class="input-text" type="file" name="student_photo" id="file" /></td>
</tr>	

</table>	
<input class="input-text" type="submit" size="10" value="Save" style="margin-top: 8px;">
</form>	 
