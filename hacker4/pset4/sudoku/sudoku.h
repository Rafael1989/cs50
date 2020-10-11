/****************************************************************************
 * sudoku.h
 *
 * CC 50
 * Pset 4
 *
 * Compile-time options for the game of Sudoku.
 ***************************************************************************/

// game's author
#define AUTHOR "Rafael"

// game's title
#define TITLE "Sul do ku"

// banner's colors
#define FG_BANNER COLOR_GREEN
#define BG_BANNER COLOR_WHITE

// banner's colors
#define FG_NUM COLOR_GREEN
#define BG_NUM COLOR_WHITE

// grid's colors
#define FG_GRID COLOR_WHITE
#define BG_GRID COLOR_GREEN

// border's colors
#define FG_BORDER COLOR_WHITE
#define BG_BORDER COLOR_GREEN

// logo's colors
#define FG_LOGO COLOR_GREEN
#define BG_LOGO COLOR_WHITE


// nicknames for pairs of colors
enum { PAIR_BANNER = 1, PAIR_NUM = 2, PAIR_GRID = 3, PAIR_BORDER = 4, PAIR_LOGO = 5 };
