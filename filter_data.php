<!DOCTYPE html>
<html>
	<script src= "angular.min.js"></script>
	<script>
		angular.module('myApp', []).controller('namesCtrl', function($scope) {
			$scope.names = [
				{name:'Jani',country:'Norway'},
				{name:'Hege',country:'Sweden'},
				{name:'Kai',country:'Denmark'}
			];
		});
	</script>
	
	<body>
		<div ng-app="myApp" ng-controller="namesCtrl">

			<p>Filtering input:</p>

			<p><input type="text" ng-model="test"></p>

			<table border="1" cellpadding="10px">
				<th>Name</th>
				<th>Country</th>
				
				<tr ng-repeat="x in names | filter:test | orderBy:'country'">
					<td>{{ (x.name | uppercase) }}</td>
					<td>{{ x.country }}</td>
				</tr>
			</table>

		</div>
	</body>
</html>
