Initial try to provide scripts to get maybe useful data out of AWS VPC Flow Logs.

https://aws.amazon.com/blogs/aws/vpc-flow-logs-log-and-view-network-traffic-flows/

### HOWTO ###

* Expects that you have your credentials in `~/.aws/credentials` (default profile)
* Adjust `config.php`
* Install deps via composer (https://getcomposer.org/doc/00-intro.md#using-composer)
* Run `fetch` (fetches cloud watch logs)
* Run `analyze` (aggregates logs)
* Run `generate` (generates HTML)
* Browser generated HTML in Folder `out`

#### Hints ####

* Fetching logs can take long time
  * Use StartTime & EndTime Limitation in `config.php`
  * Enable Flow Logging only for a short period

## Instance tags ##

* Name = used as instance display name
* Cluster = used to group instances (cluster in meaning of a mongo replicaset, webserver pool etc.)
