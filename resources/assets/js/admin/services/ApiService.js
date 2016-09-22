module.exports = function($http) {
	'ngInject';
	this.resource = '';

	this.filterResources = function(params) {
		var queryParams = buildQueryParams(params);
		return $http.get('/api/' + this.resource + queryParams);
	};

	this.getResources = function() {
		return $http.get('/api/' + this.resource);
	};

	this.getResource = function(id) {
		return $http.get('/api/' + this.resource + '/' + id);
	};

	this.createResource = function(data) {
		return $http.post('/api/' + this.resource, data, {ignoreLoadingBar: true});
	};

	this.deleteResource = function(id) {
		return $http.delete('/api/' + this.resource + '/' + id);
	};

	this.updateResource = function(id, data) {
		return $http.put('/api/' + this.resource + '/' + id, data, {ignoreLoadingBar: true});
	};

	function buildQueryParams(params) {
		var page = params.page || 1;
		var query = '?page=' + page;

		for (var paramKey in params) {
			if (paramKey !== 'page' && params[paramKey] !== undefined) {
				query += '&' + paramKey + '=' + params[paramKey];
			}
		}
		return query;
	}
};
