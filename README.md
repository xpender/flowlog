Initial try to provide scripts to get (maybe) useful data out of AWS VPC Flow Logs.

Do not expect good code - and there might be better solutions for this.

https://aws.amazon.com/blogs/aws/vpc-flow-logs-log-and-view-network-traffic-flows/

### HOWTO ###

* Download & install jpgraph: "wget http://jpgraph.net/download/download.php?p=11 -o jpgraph.tar.gz" && "tar xvf jpgraph.tar.gz && mv jpgraph-* jpgraph"
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
* Define instance tags (currently static)
  * Name = used as instance display name
  * Cluster = used to group instances (cluster in meaning of a mongo replicaset, webserver pool etc.)
