<%@page import="java.sql.*"%>
<%@ include file="connect.jsp" %>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<%	
		String userid =request.getParameter("userid");
		String sql = "SELECT * FROM  member WHERE userid= "+userid  ;
		resultSet = statement.executeQuery(sql);
		if(resultSet != null) {
			resultSet.next();
		%>
	<form name="frmUpdate" method="post" action="insert.jsp?editid=<%=resultSet.getString("userid")%>">	
		<h1>Update Form <h1>
			<table width="428" border="1">	
			<tr>
				<th width="181">
				<div align="left">userid</div></th>
				<td width="231"><%=resultSet.getString("userid")%></td>
			</tr>
			<tr>
				<th width="181">
				<div align="left">username</div></th>
				<td><input class="form-control" type="text" name="txtusername" size="20" value="<%=resultSet.getString("username")%>"></td>
			</tr>
			<tr>
				<th width="181">
				<div align="left">password </div></th>
				<td><input class="form-control" type="text" name="txtpassword" size="20" value="<%=resultSet.getString("password")%>"></td>
			</tr>

			</table> 
		<input type="submit" value="Save" class="btn btn-info">
		</form> 
		
		<% 
		}
	%>
	</div>
</body>
</html>