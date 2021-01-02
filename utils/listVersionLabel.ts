import { Version } from '@aonswap/token-lists'

export default function listVersionLabel(version: Version): string {
  return `v${version.major}.${version.minor}.${version.patch}`
}
