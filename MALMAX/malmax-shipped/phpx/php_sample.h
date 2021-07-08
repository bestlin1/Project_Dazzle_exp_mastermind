#ifndef PHP_SAMPLE_H
/* Prevent double inclusion */
#define PHP_SAMPLE_H

/* Define Extension Properties */
#define PHP_SAMPLE_EXTNAME    "sample"
#define PHP_SAMPLE_EXTVER    "1.1"
#define PHPX_EXTVER    "1.2"
#define PHPX_EXTNAME    "PHPx"

/* Import configure options
   when building outside of
   the PHP source tree */
#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

/* Include PHP Standard Header */
#include "php.h"
#include "zend_extensions.h"
#include "zend_types.h"

/* Define the entry point symbol
 * Zend will use when loading this module
 */
extern zend_module_entry sample_module_entry;
#define phpext_sample_ptr &sample_module_entry


#define XG(x) (sample_globals.x)
struct opcode_coverage { 
	uint line;
	zend_ulong file;
	zend_uchar opcode;
	//8 byte, gives good memory utilization on 64bit
};

ZEND_BEGIN_MODULE_GLOBALS(sample)
	HashTable	*function_hooks;
	HashTable	*coverage_lines;
	HashTable	*coverage_files;
	bool			coverageEnabled;
	int			opcodeCount;
	int			fileCount;
	int			prevFile;
	int 		prevLine;
	char *		prevFileString;
ZEND_END_MODULE_GLOBALS(sample)
ZEND_DECLARE_MODULE_GLOBALS(sample)


#define COVERAGE_LINES XG(coverage_lines)
#define COVERAGE_FILES XG(coverage_files)
#define FUNCTION_HOOKS XG(function_hooks)

#endif /* PHP_SAMPLE_H */
